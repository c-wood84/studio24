//////////////////////////////////////////////////
// Required
//////////////////////////////////////////////////

var gulp = require('gulp'),
	uglify = require('gulp-uglify');
	browserSync = require('browser-sync');
	reload = browserSync.reload,
	compass = require('gulp-compass');
	plumber = require('gulp-plumber');
	autoprefixer = require('gulp-autoprefixer');
	del = require('del');
	rename = require('gulp-rename');

//////////////////////////////////////////////////
// Script Tasks
//////////////////////////////////////////////////
gulp.task('scripts', function() {
	gulp.src(['app/js/**/*.js', '!app/js/**/*.min.js'])
	.pipe(plumber())
	.pipe(rename({suffix:'.min'}))
	.pipe(uglify())
	.pipe(gulp.dest('app/js'))
	.pipe(reload({stream:true}));
});

//////////////////////////////////////////////////
// Compass / Sass Tasks
//////////////////////////////////////////////////
gulp.task('compass', function(){
	gulp.src('app/scss/style.scss')
	.pipe(plumber())
	.pipe(compass({
		config_files: './config.rb',
		css: 'app/css',
		sass: 'app/scss'
	}))
	.pipe(autoprefixer('last 2 versions'))
	.pipe(gulp.dest('app/css/'))
	.pipe(reload({stream:true}));

});

//////////////////////////////////////////////////
// HTML Tasks
//////////////////////////////////////////////////
gulp.task('html', function(){
	gulp.src('app/**/*.html')
});



//////////////////////////////////////////////////
// Build Tasks
//////////////////////////////////////////////////

//clear out all files and folders from build folder
gulp.task('build:cleanfolder', function(cb){
	del([
		'build/**'
		], cb);
});

// Task to create build for all files
gulp.task('build:copy', ['build:cleanfolder'], function(){
	return gulp.src('app/**/*')
	.pipe(gulp.dest('build'));
});

// Task to remove unwanted build files
//list all files and directories here that you don't want to include
gulp.task('build:remove', ['build:copy',], function(cb){
	del([
		'build/scss',
		'build/js/!(*.min.js)'
		], cb);
});

gulp.task('build', ['build:copy', 'build:remove']);

//////////////////////////////////////////////////
// Browser-Sync Tasks
//////////////////////////////////////////////////
gulp.task('browser-sync', function(){
	browserSync({
		server:{
			baseDir: "./app/"
		}
	});

});

gulp.task('build:serve', function(){
	browserSync({
		server:{
			baseDir: "./build/"
		}
	});

});


//////////////////////////////////////////////////
// Watch Tasks
//////////////////////////////////////////////////
gulp.task('watch', function(){
	gulp.watch('app/js/**/*.js', ['scripts']);
	gulp.watch('app/scss/**/*.scss', ['compass']);
	gulp.watch('app/**/*.html', ['html']);
});

//////////////////////////////////////////////////
// Default Tasks
//////////////////////////////////////////////////
gulp.task('default', ['scripts', 'compass', 'html', 'browser-sync', 'watch']);