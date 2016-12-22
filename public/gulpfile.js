var gulp = require('gulp');
var sass = require('gulp-sass');
var connect = require('gulp-connect');

gulp.task('connect', function(){
  connect.server({
    host: '192.168.33.11',
    root: 'public',
    livereload: true
  });
});

// keeps gulp from crashing for scss errors
gulp.task('sass', function () {
  return gulp.src('./sass/*.scss')
      .pipe(sass({ errLogToConsole: true }))
      .pipe(gulp.dest('./css'));
});

gulp.task('sass1', function () {
  return gulp.src('./project/legacy/sass/**.scss')
      .pipe(sass({ errLogToConsole: true }))
      .pipe(gulp.dest('./project/legacy/css'))
});

gulp.task('sass2', function () {
  return gulp.src('./project/affirmations/wp-content/themes/affirmations/library/scss/**.scss')
      .pipe(sass({ errLogToConsole: true }))
      .pipe(gulp.dest('./project/affirmations/wp-content/themes/affirmations/library/css'))
});

gulp.task('livereload', function (){
  gulp.src('./public/**/*')
  .pipe(connect.reload());
});

gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('./project/legacy/sass/**/*.scss', ['sass1']);
  gulp.watch('./project/affirmations/wp-content/themes/affirmations/library/**/*.scss', ['sass2']);
  gulp.watch('./public/**/*', ['livereload']);
});

gulp.task('default', ['connect', 'watch', 'sass', 'sass1', 'sass2']);

// var gulp = require('gulp');
// var sass = require('gulp-sass');
// var connect = require('gulp-connect');

// gulp.task('connect', function(){
//   connect.server({
//     host: '192.168.33.11',
//     root: 'public',
//     livereload: true
//   });
// });

// // keeps gulp from crashing for scss errors
// gulp.task('sass', function () {
//   return gulp.src('./sass/**.scss')
//       .pipe(sass({ errLogToConsole: true }))
//       .pipe(gulp.dest('./css'));
// });

// gulp.task('sass1', function () {
//   return gulp.src('./project/legacy/sass/**.scss')
//       .pipe(sass({ errLogToConsole: true }))
//       .pipe(gulp.dest('./project/legacy/css'))
// });

// gulp.task('livereload', function (){
//   gulp.src('./**/*')
//   .pipe(connect.reload());
// });

// gulp.task('watch', function () {
//   gulp.watch('./sass/**/*.scss', ['sass']);
//   gulp.watch('./project/legacy/sass/**/*.scss', ['sass1']);
//   gulp.watch('./**/*', ['livereload']);
// });

// gulp.task('default', ['connect', 'watch', 'sass']);