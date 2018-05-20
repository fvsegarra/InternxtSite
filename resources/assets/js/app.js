
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
