const gulp = require('gulp');
const sass = require('gulp-sass');
const typescript = require('gulp-typescript');
const pug = require('gulp-pug');
const browserSync = require('browser-sync').create();

function style() {
  return gulp.src('./src/sass/**/*.sass')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('./dest/css'))
    .pipe(browserSync.stream());
}

function dotypescript() {
  return gulp.src('./src/scripts/**/*.ts')
    .pipe(typescript())
    .pipe(gulp.dest('./dest/scripts'));
}

function dopug() {
  return gulp.src('./src/pug/*.pug')
    .pipe(pug())
    .pipe(gulp.dest('./dest'));
}

function watch() {
  browserSync.init({
    server: {
      baseDir: './dest'
    }
  });
  gulp.watch('./src/sass/**/*.sass', style);
  gulp.watch('./src/scripts/**/*.ts', dotypescript);
  gulp.watch('./src/pug/**/*.pug', dopug);
  gulp.watch('./dest/**/*.html').on('change', browserSync.reload);
  gulp.watch('./dest/scripts/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.dotypescript = dotypescript;
exports.dopug = dopug;
exports.watch = watch;
