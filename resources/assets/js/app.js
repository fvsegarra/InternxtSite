
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$('.nav-tabs .nav-link').click((e) => {

	console.debug('X Cloud features tab clicked');

	let originalClass = 'featurePreview';

	var tag = originalClass + '--' + $(e.target).attr('href').replace("#", "");

	console.debug(tag);

	$('.featurePreview').attr('class', originalClass + ' ' + tag);

});

$('.subsection--milestone').click((e) => {

	console.debug('Milestone clicked');

	let classString = 'subsection--milestone--active';
	var clicked = $(e.currentTarget);

	// remove active class from  others
	$('.' + classString).not(clicked).removeClass(classString);

	clicked.toggleClass(classString);

});

let activeMemberProfileClass = 'memberProfile--active';
let activeBodyClass = 'hasActiveMemberProfile';
let delayHidingScrolbar = 250;
let memberProfile = $('.memberProfile');

$('.teamMember').click((e) => {

	console.debug('teamMember clicked');

	let clickedMember = e.currentTarget;

	let replacements = [
		'name',
		'role',
		'bio',
	];

	$.each(replacements, (index, replacement) => {
		memberProfile.find('.memberProfile__' + replacement).text($(clickedMember).find('.teamMember__' + replacement).text());
	});

	memberProfile.find('.memberProfile__image').attr('src', $(clickedMember).find('.teamMember__image').attr('src'));

	memberProfile.addClass(activeMemberProfileClass);

	window.setTimeout(()=>{
		$('body').addClass(activeBodyClass);
	}, delayHidingScrolbar);

});

$('.memberProfile__btn').click((e) => {

	console.debug('memberProfile__btn clicked');

	memberProfile.removeClass(activeMemberProfileClass);

	$('body').removeClass(activeBodyClass);

});

$('.modal__checkbox').click((e) => {

	console.debug('modal__checkbox clicked');

	var target = $(e.currentTarget);

	var isChecked = target.find('input').is(":checked");

	let btnClass = 'modal__cta';
	let disabledClass = 'modal__cta--disabled';

	if (isChecked) {
		$('.' + btnClass).removeClass(disabledClass);
		// $('.' + btnClass).attr('href', '#');
	}
	else {
		$('.' + btnClass).addClass(disabledClass);
		$('.' + btnClass).attr('href', '#');
	}


});

var burger = $('.burger-container'),
header = $('.mobile-header');

burger.click(function() {
	header.toggleClass('menu-opened');
});
