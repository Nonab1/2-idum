var gulp = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
var csso = require('gulp-csso');
var rename = require("gulp-rename");
var gcmq = require('gulp-group-css-media-queries');
var watch = require('gulp-watch');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
// var less = require('gulp-less');

gulp.task('style', style)


function style() {
    
    return gulp.src('app/css/about.css')
    .pipe(sourcemaps.init())
    // .pipe(less())
    .pipe(plumber())
    .pipe(autoprefixer({
        browsers:['last 50 version'],
        cascade: false
    }))
    .pipe(gcmq())
    // .pipe(rename({
    //     suffix: "1",
    // }))
    // .pipe(gulp.dest("app/"))
    .pipe(csso())
    .pipe(rename({
        suffix: ".min",
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest("app/css/"))
    .pipe(browserSync.stream())
}


//eski
gulp.task('watch', function () {
    watch('app/style.css', function () {
        gulp.src('app/style.css')
        .pipe(gulp.dest('app/'));
    });
});

//yangi
// gulp.task('watch', function () {
//     watch('app/style.css', style);
// });


gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: "./app"
        }
    });
});

gulp.task('default', gulp.parallel('style', "watch", 'server'))