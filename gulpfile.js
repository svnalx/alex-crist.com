const { watch, src, dest } = require('gulp');
const livereload = require('gulp-livereload');
const autoprefixer = require('gulp-autoprefixer');
const gulpSass = require('gulp-sass');

sass.compiler = require('node-sass');

exports.default = function() {
  livereload.listen();
  watch('app/scss/*.scss', { events: 'all' }, sass);
  watch('app/css/*.css', { events: 'all' }, autoprefix);
};

function autoprefix() {
  return src('app/css/*.css')
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(dest('dist/css'))
    .pipe(livereload());
};

function sass() {
  return src('app/scss/*.scss')
    .pipe(gulpSass())
    .pipe(dest('app/css'))
};