var gulp = require('gulp'),
modernizr = require('gulp-modernizr')
configuracion = require('../configuracion');

gulp.task('modernizr', function() {
	return gulp.src([configuracion.themeLocation + 'css/**/*.css', configuracion.themeLocation + 'js/**/*.js', '!'+configuracion.themeLocation + 'js/vendor/**/*.js'])
		.pipe(modernizr({
			'options': ['setClasses'],
		}))
		.pipe(gulp.dest(configuracion.themeLocation + '/js/vendor'));
})