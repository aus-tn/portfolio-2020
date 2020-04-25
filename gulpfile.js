'use strict';
const gulp = require('gulp'),
    sass = require('gulp-sass'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify'),
    pipeline = require('readable-stream').pipeline,
    cleanCSS = require('gulp-clean-css');
sass.compiler = require('node-sass');

gulp.task('imageminify', function () {
    return gulp.src('./src/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./img/'));
});

gulp.task('imageminify:watch', gulp.parallel(function () {
    gulp.watch('./src/img/*', gulp.series('imageminify'));
}));

gulp.task('uglifyjs', gulp.parallel(function () {
    return pipeline(
        gulp.src('./src/js/*.js'),
        uglify(),
        gulp.dest('./js')
    );
}));

gulp.task('uglifyjs:watch', gulp.parallel(function () {
    gulp.watch('./src/js/*.js', gulp.series('uglifyjs'));
}));

gulp.task('sass', gulp.parallel(function () {
    return gulp.src('./src/scss/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./src/css'));
}));

gulp.task('sass:watch', gulp.parallel(function () {
    gulp.watch('./src/scss/*.scss', gulp.series('sass'));
}));

gulp.task('minify-css', gulp.parallel(function () {
    return gulp.src('src/css/*.css')
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(gulp.dest('./css'));
}));

gulp.task('minify-css:watch', gulp.parallel(function () {
    gulp.watch('./src/css/*.css', gulp.series('minify-css'));
}));

gulp.task('default', gulp.parallel('imageminify', 'imageminify:watch', 'uglifyjs', 'uglifyjs:watch', 'sass', 'sass:watch', 'minify-css', 'minify-css:watch'));