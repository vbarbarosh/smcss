'use strict';

var del = require('del'),
    gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    sm = require('postcss-sm'),
    runSequence = require('run-sequence');

gulp.task('clean', function () {
    return del('build');
});

gulp.task('css', function (cb) {
    return gulp.src('src/css/sm.css')
        .pipe(postcss([], {syntax: sm}))
        .pipe(gulp.dest('build'));
});

gulp.task('build', function (cb) {
    runSequence('clean', ['css'], cb);
});

gulp.task('default', ['build']);
