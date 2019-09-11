const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');

exports.default = () => (
  gulp.src('src/base.css')
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('dist'))
);