var gulp = require('gulp'),
modernizr = require('gulp-modernizr')
configuracion = require('../configuracion');

gulp.task('modernizr', function() {
	return gulp.src([configuracion.themeLocation + 'css/**/*.css', configuracion.themeLocation + 'js/**/*.js'])
		.pipe(modernizr({
			'options': ['setClasses']
		}))
		.pipe(gulp.dest(configuracion.themeLocation + '/vendor'));
});