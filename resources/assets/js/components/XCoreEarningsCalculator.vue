
<template>
    <div>
        <input class="section__input" type="number" min="1" max="10000" v-model="gigabytesAllocated" placeholder="Amount of GB allocated"><input class="section__input" type="number" min="1" max="10000" v-model="inxtOwned" placeholder="Amount of INXT owned">
        <p class="section__output">{{ amountEarned }}</p>
    </div>
</template>

<script>

    import accounting from 'accounting-js';

    export default {
        data() {
            return {
                gigabytesAllocated: null,
                inxtOwned: null,
                pricePerGigabyte: 2,
                minInxtForBonus: 100,
                bonusPercentage: 0.01,
            }
        },
        computed: {
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

                var amountInCents = this.gigabytesAllocated * this.pricePerGigabyte;

                if (this.inxtOwned >= this.minInxtForBonus) {

                    var bonusMultiplier = (this.inxtOwned * this.bonusPercentage) / 100;

                    var increaseInCents = amountInCents * bonusMultiplier;

                    amountInCents += increaseInCents;

                    // console.debug('bonusMultiplier', bonusMultiplier, 'increaseInCents', increaseInCents, 'amountInCents', amountInCents);
                }

                var amountInEuros = amountInCents / 100;

                return accounting.formatMoney(amountInEuros, {
                    symbol: "€",
                    decimal: ".",
                    thousand: ",",
                    precision: 2,
                });

            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
