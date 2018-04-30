
var gulp   = require('gulp');
var fs = require('fs');
var path = require('path');
var glob = require('glob');
var sass = require('gulp-sass')
var cleanCSS = require('gulp-clean-css')
//var _ = require('gulp-load-plugins')({lazy: false});
var uglify=require('gulp-uglify'),concat=require('gulp-concat');
var browserSync = require('browser-sync').create()
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var imageResize = require('gulp-image-resize');
var postcss      = require('gulp-postcss');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');


var paths = {
  images: "./src/team/*.*"
}

gulp.task('thumbnailGen', function() {

    gulp.src(['./src/team/**/*.png', './src/team/*.jpg'])
        .pipe(imageResize({
            width: 103,
            height: 103
        }))
        .pipe(gulp.dest('./src/thumbnail/'));


});


gulp.task('sass',function(){
  gulp.src('./src/styles/app.scss')
  .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(concat('style.css'))
    .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest('./build/assets'))
});


// Hack the ability to import directories in Sass
// Find any _all.scss files and write @import statements
// for all other *.scss files in the same directory
//
// Import the whole directory with @import "somedir/all";
gulp.task('sass-includes', function (callback) {
	var all = '_all.scss';
	glob('./src/styles/**/' + all, function (error, files) {
		files.forEach(function (allFile) {
			// Add a banner to warn users
			fs.writeFileSync(allFile, '/** This is a dynamically generated file **/\n\n');

			var directory = path.dirname(allFile);
			var partials = fs.readdirSync(directory).filter(function (file) {
				return (
					// Exclude the dynamically generated file
					file !== all &&
					// Only include _*.scss files
					path.basename(file).substring(0, 1) === '_' &&
					path.extname(file) === '.scss'
				);
			});

			// Append import statements for each partial
			partials.forEach(function (partial) {
				fs.appendFileSync(allFile, '@import "' + partial + '";\n');
			});
		});
	});

	callback();
});


gulp.task('autoprefixer', function () {

    return gulp.src('./build/assetsstyle.css')
        .pipe(sourcemaps.init())
        .pipe(postcss([ autoprefixer() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./build/assets'));
});

gulp.task('minify-css', function() {
  return gulp.src('./src/process/styles/preFixedandSourced/style.css')
.pipe(sourcemaps.init())
  .pipe(cleanCSS())
  .pipe(rename({ extname: '.min.css'}))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest('./src/process/styles/minified'));
});


gulp.task('build-js', function() {
  gulp.src('./src/scripts/app.js')
  .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(concat('script.js'))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('./build/assets'))
});


gulp.task('app_build_css', ['sass', 'autoprefixer'], function(){
    return gulp.src('./src/process/styles/preFixedandSourced/*.css')

        //.pipe(concat('style.css'))

        .pipe(gulp.dest('./build/assets'));
});

gulp.task('copyMap', function () {
    gulp.src('./src/process/styles/minified/*.min.css.map')
    .pipe(concat('style.css.map'))
        .pipe(gulp.dest('./build/assets'));
});

gulp.task('watch', function() {
browserSync.init({
  proxy: "localhost/Dairy/New-Website/build/",
  port: 8000
});

  gulp.watch('./src/styles/**/!(_all).scss', ['app_build_css']).on('change', browserSync.reload);
  gulp.watch('./src/scripts/*.js', ['build-js'])
  gulp.watch( './build/*.php').on('change', browserSync.reload)
});
