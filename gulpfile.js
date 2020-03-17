// Initialize modules
// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
const { src, dest, watch, series, parallel } = require('gulp');
// Importing all the Gulp-related packages we want to use
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sassGlob = require('gulp-sass-glob');


// File paths
const files = {
  scssPath: 'sass/**/*.scss',
}

// Sass task: compiles the style.scss file into style.css
function scssTask(){
  return src(files.scssPath)
    .pipe(sassGlob())
    .pipe(sourcemaps.init()) // initialize sourcemaps first
    .pipe(sass()) // compile SCSS to CSS
    .pipe(postcss([ autoprefixer(), cssnano() ])) // PostCSS plugins
    .pipe(sourcemaps.write('.')) // write sourcemaps file in current directory
    .pipe(dest('css')
    ); // put final CSS in dist folder
}

function watchTask(){
  watch([files.scssPath],
    series(
      parallel(scssTask),
    )
  );
}

exports.default = series(
  parallel(scssTask),
  watchTask
);