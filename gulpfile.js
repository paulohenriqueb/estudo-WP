var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
	return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
	.pipe(sass())//Convert sass in css
	.pipe(gulp.dest('src/css'));
});

gulp.task('watch', gulp.series( function() {
    gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'], gulp.parallel( ['sass'] ));
}));


gulp.task('default', gulp.series( ['sass', 'watch'] ));