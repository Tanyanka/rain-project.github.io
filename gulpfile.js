var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var changed = require('gulp-changed');
var fileinclude = require('gulp-file-include');
var sequence = require('run-sequence');

var config = {
    dist: 'dist/',
    src: './',
    cssin: 'src/css/**/*.css',
    jsin: 'src/js/*.js',
    imgin: 'src/img/**/*.{jpg,jpeg,png,gif,svg}',
    htmlin: 'src/*.html',
    htmlinc: 'src/*/*/*.html',
    scssin: 'src/scss/style.scss',
    scssinall: 'src/scss/*.scss',
    cssout: 'dist/css/',
    jsout: 'dist/js/',
    imgout: 'dist/img/',
    htmlout: './',
    scssout: 'src/css/',
    cssoutname: 'style.css',
    jsoutname: 'script.js',
    cssreplaceout: 'css/style.css',
    jsreplaceout: 'js/script.js'
};
gulp.task('reload', function() {
    browserSync.reload();
});
//gulp.task('include-watch', ['fileinclude', 'reload']);

gulp.task('fileinclude', function () {
    gulp.src(config.htmlin)
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest(config.htmlout))
        .pipe(browserSync.stream())
});
gulp.task('sass', function () {
    return gulp.src(config.scssin)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(gulp.dest(config.scssout))
        .pipe(browserSync.stream())
});

gulp.task('css', function() {
    return gulp.src(config.cssin)
        .pipe(concat(config.cssoutname))
        .pipe(cleanCSS())
        .pipe(gulp.dest(config.cssout))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {
    return gulp.src(config.jsin)
        .pipe(concat(config.jsoutname))
        .pipe(uglify())
        .pipe(gulp.dest(config.jsout));
});

gulp.task('img', function() {
    return gulp.src(config.imgin)
        .pipe(changed(config.imgout))
        .pipe(imagemin())
        .pipe(gulp.dest(config.imgout));
});
gulp.task('serve', ['sass'], function () {
    browserSync({
        server: config.src
    });

    gulp.watch(config.jsin, ['js-watch']);
    gulp.watch(config.scssinall, ['sass-watch']);
    gulp.watch(config.cssin, ['css-watch']);
    gulp.watch([config.htmlin, config.htmlinc], ['fileinclude'], ['reload']);
    gulp.watch(config.imgin, ['img']);
});
gulp.task('sass-watch', ['sass']);
gulp.task('css-watch', ['css', 'reload']);
gulp.task('js-watch', ['js', 'reload']);

gulp.task('build', function() {
    sequence(['fileinclude', 'js', 'css', 'img']);
});

gulp.task('default', ['serve']);