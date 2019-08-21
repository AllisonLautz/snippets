const gulp = require('gulp');
const sass = require('gulp-sass');
const del = require('del');
const browserSync = require('browser-sync').create();
const svgSprite = require('gulp-svg-sprite');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const runSequence = require('run-sequence');



const config = {
	shape:{
		id:{
			separator:'',
		},
		transform       : [],
	},
	mode: {
		symbol:{
			sprite: '../sprite.svg',
		},
	},

};




gulp.task('serve', () => {
	browserSync.init({
		proxy: 'localhost/_other/snippets',
		open: 'external'
	});

	gulp.watch("assets/js/**/[^_]*.js", gulp.series('js'));
	gulp.watch("assets/sass/**/*.scss", gulp.series('sass'));
	gulp.watch("imgs/svg/**.svg", gulp.series('svg'));
	gulp.watch("*.php").on('change', browserSync.reload);
});


gulp.task('js', () => {
	return gulp.src("./assets/js/**/[^_]*.js")
	.pipe(uglify()).on('error', function(e){console.log(e);})
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest("./dist/js"))
	.pipe(browserSync.stream());
});


gulp.task('sass', () => {
	return gulp.src("assets/sass/**/*.scss")
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	// .pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest("./dist/css"))
	.pipe(browserSync.stream());
});


gulp.task('svg', () => {
	return gulp.src('imgs/svg/**.svg')
	.pipe(svgSprite(config))
	.pipe(gulp.dest('imgs'));
});


gulp.task('default', gulp.series('serve'));


