var gulp = require('gulp')
	uglify = require('gulp-uglify'),
	minifyCSS = require('gulp-minify-css'),
	concat = require('gulp-concat'),
	del = require('del'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass');
 
 
gulp.task('scripts',function(){
	return gulp.src([
			'js/jquery-3.4.1.min.js',
			'js/TweenMax.min.js',
			'js/owl.carousel.js',
			'js/owl.autoplay.js',
			'js/owl.navigation.js',
			'js/owl.animate.js',
			'js/owl.support.js',
			"js/select2.full.min.js",
			'js/lightbox.js',
			'js/main.js'
		])
		.pipe(concat('scripts.js'))
		.pipe(gulp.dest('js'))
});

gulp.task("minifyScripts", function() {
	return gulp.src("js/scripts.js")
		.pipe(uglify())
		.pipe(rename('main.min.js'))
		.pipe(gulp.dest('js'));
});

gulp.task("sass", function() {
	return gulp.src("css/style.sass")
	.pipe(sass().on('error', sass.logError))
    .pipe(rename('style.css'))
	.pipe(gulp.dest('css'))
});

gulp.task("sass-resp", function() {
	return gulp.src("css/responsive.sass")
	.pipe(sass().on('error', sass.logError))
    .pipe(rename('responsive.css'))
	.pipe(gulp.dest('css'))
});

gulp.task("styles", function() {
	return gulp.src([
		"css/normalize.css",
		"css/reset.css",
		"css/owl.carousel.min.css",
		"css/owl.theme.default.min.css",
		"css/core.css",
		"css/animate.css",
		"css/lightbox.css",
		"css/bootstrap-grid.css",
		// "css/daterangepicker.css",
		'css/select2.min.css',
		// 'fonts/sourcesanspro/sourcesanspro.css',
		"css/style.css",
		"css/responsive.css"
	])
	.pipe(minifyCSS())
	.pipe(concat('site.css'))
	.pipe(gulp.dest('css'))
});

gulp.task("minifyCss", function() {
  return gulp.src("css/site.css")
    .pipe(rename('site.css'))
    .pipe(gulp.dest('css'));
});

gulp.task('clean', function() {
  return del(['css/site.css']);
});

gulp.task('watch',function(){
	gulp.watch('js/main.js',['scripts', 'minifyScripts']);
    gulp.watch('css/*.sass',['sass', 'sass-resp', 'styles', 'minifyCss']);
});

gulp.task('default', ['scripts', 'minifyScripts', 'sass', 'styles', 'minifyCss', 'clean']);