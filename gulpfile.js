const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
var srcCss = [
  "app/css/styles.css",
  "app/css/fonts.css",
  "app/css/base.css",
  "app/css/416px.css",
  "app/css/630px.css",
  "app/css/780px.css",
  "app/css/945px.css",
  "app/css/1366px.css",
];

exports.default = () => (
  gulp.src(srcCss)
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('dist/css'))
);