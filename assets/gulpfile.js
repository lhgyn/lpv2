
const gulp = require('gulp');

/* IMG Requires */
const imagemin = require('gulp-imagemin');

/* CSS Requires */
var cssmin = require('gulp-cssmin');

/* JS Requires */
var uglify = require('gulp-uglify');
var pipeline = require('readable-stream').pipeline;

/* Global Requires */
var rename = require('gulp-rename');
var concat = require('gulp-concat');



gulp.task('image-clean', () =>
    gulp.src('./img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./img'))
);


gulp.task('css-min', function () {
    gulp.src('./css/*.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(concat('all.min.css'))
        .pipe(gulp.dest('./css'));
});


gulp.task('js-min', function () {
  	gulp.src('./js/*.js')
        .pipe(uglify())
        .pipe(concat('all.min.js'))
        .pipe(gulp.dest('./js'))
});






function defaultTask(cb) {
  // place code for your default task here
  cb();
}

exports.default = defaultTask