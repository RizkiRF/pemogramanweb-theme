var gulp = require('gulp'),
	sass = require('gulp-sass')
	cssmin = require('gulp-cssmin')
	rename = require('gulp-rename')
	sourcemaps = require('gulp-sourcemaps')
  notify = require("gulp-notify");

gulp.task('sass', function () {
  gulp.src('./sass/*.scss')
  	.pipe(sourcemaps.init())
    	.pipe(sass().on('error', sass.logError))
    	.pipe(sourcemaps.write('./maps'))
    	.pipe(gulp.dest('../css'))
      .pipe(notify("Success Sass to css Task"));
});

gulp.task('css-minify',['sass'],function(){
	gulp.src('../css/**/*.css')
     	.pipe(cssmin())
    	.pipe(rename({suffix: '.min'}))
    	.pipe(gulp.dest('../css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('default',['sass','sass:watch']);