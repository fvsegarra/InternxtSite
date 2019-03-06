
<template>
    <div :class="focusClasses">
        <div class="section__inputContainer section__inputContainer--gb">
            <input
                class="section__input"
                type="number"
                min="1"
                max="10000"
                v-model="gigabytesAllocated"
                :placeholder="gigaBytePlaceholder"
                @focus="takeFocus()"
                @blur="loseFocus()"
            >
        </div>
        <div class="section__inputContainer section__inputContainer--inxt">
            <input
                class="section__input"
                type="number"
                min="0"
                max="10000"
                v-model="inxtOwned"
                :placeholder="inxtPlaceholder"
                @focus="takeFocus()"
                @blur="loseFocus()"
            >
        </div>
        <p class="section__output">{{ totalText }}</p>
    </div>
</template>

<script>

    import accounting from 'accounting-js';

    export default {
        data() {
            return {
                gigabytesAllocated: null,
                inxtOwned: null,
                centsPerGigabyte: 1,
                minInxtForBonus: 100,
                bonusPercentage: 0.01,
                hasFocus: false,
            }
        },
        computed: {

            focusClasses() {
                return {
                    'x-core-earnings-calculator': true,
                    'x-core-earnings-calculator--hasFocus': this.hasFocus,
                }
            },

            gigaBytePlaceholder() {
                if (!this.hasFocus) {
                    return 'Amount of GB allocated';
                }
            },

            inxtPlaceholder() {
                if (!this.hasFocus) {
                    return 'Amount of INXT owned';
                }
            },

            totalText() {
                if (this.gigabytesAllocated > 0) {
                    return this.amountEarned + ' / month';
                }
                return 'Amount you will earn';
            },

            amountEarned() {
                /**
                    €0,02 are paid per GB allocated.
                    0.01% is added per 1 INXT held (over 99 INXT).

                    Examples:
                    100GB,   0 INXT = 100GB*€0,02/GB = €2/month
                    100GB,  99 INXT = 100GB*€0,02/GB = €2/month
                    100GB, 100 INXT = 100GB*€0,02/GB = 2€/month; 1% of €2 = €0,02 => €2,02
                    100GB, 150 INXT = 100GB*€0,02/GB = 2€/month; 1.5% of €2 = €0,03 => €2,03
                    100GB, 200 INXT = 100GB*€0,02/GB = 2€/month; 2% of €2 = €0,04 => €2,04
                */

                var amountInCents = this.gigabytesAllocated * this.centsPerGigabyte;

                if (this.inxtOwned >= this.minInxtForBonus) {
                    amountInCents += this.addBonus(amountInCents);
                }

                var amountInEuros = amountInCents / 100;

                return this.formatAmount(amountInEuros);
            },
        },

        methods:{

            takeFocus(){
                this.hasFocus = true;
            },

            loseFocus(){
                // Only lose focus if nothing has been entered in either field
                if (!this.gigabytesAllocated && !this.inxtOwned) {
                    this.hasFocus = false;
                }
            },

            formatAmount(amount) {
                return accounting.formatMoney(amount, {
                    symbol: "€",
                    decimal: ".",
                    thousand: ",",
                    precision: 2,
                });
            },

            addBonus(originalAmount) {
                var bonusMultiplier = (this.inxtOwned * this.bonusPercentage) / 100;
                return originalAmount * bonusMultiplier;
            }

        },
    }
</script>
