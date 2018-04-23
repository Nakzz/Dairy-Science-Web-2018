var gulp = require('gulp')
var sass = require('gulp-sass')
var cleanCSS = require('gulp-clean-css')
//var _ = require('gulp-load-plugins')({lazy: false});
var autoprefixer = require('gulp-autoprefixer');
var uglify=require('gulp-uglify'),concat=require('gulp-concat');
var browserSync = require('browser-sync').create()
var rename = require('gulp-rename');

gulp.task('sass',function(){
  gulp.src('./src/styles/app.scss')
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(concat('style.css'))
  .pipe(gulp.dest('./build/assets'))
});


gulp.task('minify-css', function() {
  return gulp.src('./build/assets/style.css')
  .pipe(cleanCSS())
  .pipe(rename({ extname: '.min.css'}))
  .pipe(gulp.dest('./build/assets'));
});


gulp.task('build-js', function() {
  gulp.src('./src/scripts/app.js')
  .pipe(uglify())
  .pipe(concat('script.js'))
  .pipe(gulp.dest('./build/assets'))
});


gulp.task('watch', function() {

browserSync.init({
  proxy: "localhost/new_fpsc/build/",
  port: 8000
});

  gulp.watch('./src/scripts/*.js', ['build-js']).on('change', browserSync.reload)
  gulp.watch('./src/styles/*.scss', ['sass']).on('change', browserSync.reload)
  gulp.watch( './build/assets/*.css', ['minify-css']).on('change', browserSync.reload)
});
