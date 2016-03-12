'use strict';

var del = require('del'),
    gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    postcssImport = require('postcss-import'),
    sm = require('postcss-sm'),
    runSequence = require('run-sequence');

gulp.task('clean', function () {
    return del('build');
});

gulp.task('copy', function () {
    return gulp.src()
        .pipe(gulp.dest('build'));
});

gulp.task('css', function () {
    return gulp.src('src/sm.sass')
        .pipe(postcss([postcssImport], {syntax: sm}))
        .pipe(gulp.dest('build'));
});

gulp.task('build', function (cb) {
    runSequence('clean', ['css', 'copy'], cb);
});

gulp.task('default', ['build']);
