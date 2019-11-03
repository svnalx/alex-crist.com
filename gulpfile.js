const { watch, src, dest } = require('gulp');
const livereload = require('gulp-livereload');
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

exports.default = function() {
  livereload.listen();
  watch('app/css/*.css', { events: 'all' }, apf);
};

function apf() {
  return src(srcCss)
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(dest('dist/css'))
    .pipe(livereload());
};