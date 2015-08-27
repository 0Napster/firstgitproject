var gulp = require("gulp");
var plugins = require("gulp-load-plugins")();
var runSequence = require("run-sequence");

var jsConcatFiles = [
    'js/main.js',
    'js/menu.js'
];

gulp.task("scripts:dev", function () {
    return gulp.src(jsConcatFiles)
        .pipe(plugins.concat("concat.js"))
        .pipe(gulp.dest("js/min"));
});

gulp.task("scripts:prod", ["scripts:dev"], function () {
    return gulp.src("js/min/concat.js")
        .pipe(plugins.plumber())
        .pipe(plugins.uglify())
        .pipe(plugins.rename("common.min.js"))
        .pipe(gulp.dest("js/min"));
});

gulp.task("styles:dev", function () {
    return gulp.src("styles/sass/*.scss")
        .pipe(plugins.plumber())
        .pipe(plugins.compass({
            style: "expanded",
            comments: true,
            css: "styles/css",
            sass: "styles/sass",
            environment: "development"
        }))
        .pipe(gulp.dest("styles/css"));
});

gulp.task("styles:prod", function () {
    return gulp.src("styles/sass/*.scss")
        .pipe(plugins.plumber())
        .pipe(plugins.compass({
            style: "compressed",
            comments: false,
            css: "styles/css",
            sass: "styles/sass",
            environment: "production"
        }))
        .pipe(gulp.dest("styles/css"));
});

gulp.task("default", function () {
    gulp.watch(jsConcatFiles, ["scripts:dev"]);

    gulp.watch("styles/sass/*.scss")
        .on("change", function (event) {
            gulp.src(event.path)
                .pipe(plugins.plumber())
                .pipe(plugins.compass({
                    style: "expanded",
                    comments: true,
                    css: "styles/css",
                    sass: "styles/sass",
                    environment: "development"
                }))
                .pipe(gulp.dest("styles/css"));
        });
});

gulp.task("build", function (cb) {
    runSequence(["scripts:dev", "styles:dev"], cb);
});

gulp.task("build:prod", function (cb) {
    runSequence(["scripts:prod", "styles:prod"], cb);
});
