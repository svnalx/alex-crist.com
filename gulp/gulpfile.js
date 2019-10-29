const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
var srcCss = [
  "src/base.css",
  "src/416px.css",
  "src/630px.css",
  "src/780px.css",
  "src/945px.css",
  "src/1366px.css",
];

exports.default = () => (

  gulp.src(srcCss)
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('dist'))
);