const gulp = require('gulp');
const babel = require('gulp-babel');
const gulp_sass = require('gulp-sass');
const del = require('del');
const browserSync = require('browser-sync').create();
const svgSprite = require('gulp-svg-sprite');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const runSequence = require('run-sequence');




const { watch } = require('gulp');

const js = watch(['assets/js/**/[^_]*.js']);

js.on('change', function(path, stats) {
	// console.log(`File ${path} was changed`);
	gulp.src('./assets/js/**/[^_]*.js')
	.pipe(babel({
		presets: ['@babel/env']
	}))


	.pipe(uglify()).on('error', function(e){console.log(e);})
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('./dist/js'))
	.pipe(browserSync.stream());
	// .pipe(browserSync.reload);

});




const sass = watch(['assets/sass/**/*.scss']);

sass.on('change', function(path, stats){
	// console.log(`File ${path} was changed`);
	gulp.src('assets/sass/**/*.scss')
	.pipe(gulp_sass({outputStyle: 'compressed'}).on('error', gulp_sass.logError))
	.pipe(rename({suffix: '.min'}))
	.pipe(gulp.dest('./dist/css'))
	.pipe(browserSync.stream());
})



const svg = watch(['imgs/svg/**.svg']);

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

svg.on('change', function(path, stats){
	return gulp.src('imgs/svg/**.svg')
	.pipe(svgSprite(config))
	.pipe(gulp.dest('imgs'));
});


const folder = 'localhost/other/snippets'; /* update this to reflect local folder */

gulp.task('serve', () => {
	browserSync.init({
		proxy: folder+'/index.php',
		open: 'external'
	});



	gulp.watch('*.php').on('change', browserSync.reload);
});



gulp.task('default', gulp.series('serve'));