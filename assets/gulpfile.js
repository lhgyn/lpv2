
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
    gulp.src([
        './css/_1.1-bootstrap.min.css',
        './css/_1.2-google-fonts.css',
        './css/_1.3-header.style.css',
        './css/_1.4-footer.style.css',
        './css/_1.5-home.style.css',
        './css/_1.6-como-funciona.style.css',
        './css/_1.7-depoiments.style.css',
        './css/_1.8-garantia.style.css',
        './css/_1.9-perguntas-frequentes.style.css',
        './css/_2.1-contato.style.css',
        './css/_2.2-politicas.style.css',
        './css/_2.3-peca-agora.style.css',
        './css/_5.1-flaticon.css',
        './css/_5.2-font-awesome.css',
        './libs/animate.css',
        './libs/GoogleNexusWebsiteMenu/css/component.css'

      ])
      .pipe(cssmin())
      .pipe(concat('all.min.css'))
      .pipe(gulp.dest('./css'));
});


gulp.task('js-min', function () {
  	gulp.src([
        './js/*.js',
        './libs/GoogleNexusWebsiteMenu/js/classie.js',
        './libs/GoogleNexusWebsiteMenu/js/gnmenu.js'
      ])
      .pipe(uglify())
      .pipe(concat('all.min.js'))
      .pipe(gulp.dest('./js'))
});



function defaultTask(cb) {
  // place code for your default task here
  cb();
}

exports.default = defaultTask