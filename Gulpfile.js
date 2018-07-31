'use strict';

var gulp = require('gulp'),
	toolkit = require('gulp-wp-toolkit');

toolkit.extendConfig({
	theme: {
		name: "Generico",
		author: "Craig Simpson <craig@craigsimpson.scot>",
		description: "Developer-friendly Genesis starter theme with a config-driven approach.",
		version: "0.1.0",
		license: "MIT",
		textdomain: "generico",
		domainpath: "/languages",
		template: "genesis"
	},
	dest: {
		images: 'assets/images/',
		js: 'assets/js/'
	},
	js: {
		'generico': [
			'develop/js/responsive-menu.js',
			'develop/js/generico.js'
		]
	},
	css: {
		scss: {
			'style': {
				outputStyle: 'expanded',
				sourceMap: false
			}
		}
	}
});

toolkit.extendTasks(gulp, { /* gulp task overrides */ });
