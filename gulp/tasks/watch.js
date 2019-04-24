var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create(),
configuracion = require('../configuracion');

gulp.task('watch', function() {
	//inicia browsersync
	browserSync.init({
		notify: false,
		proxy: configuracion.urlToPreview,
		ghostMode: false
	});
	//inicia browsersync

	watch('./**/*.php', function() {
	    browserSync.reload();
	});

	watch(configuracion.themeLocation + 'css/**/*.css', function() {
		gulp.start('cssInject');
	});

	watch([configuracion.themeLocation + 'js/**/*.js', '!'+configuracion.themeLocation + 'js/vendor/**/*.js'], function() {
		gulp.start('scriptsRefresh');
	});
});

gulp.task('cssInject', ['styles'], function() {
	return gulp.src(configuracion.themeLocation + 'style.css')
		.pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'] ,function() {
	browserSync.reload();
});