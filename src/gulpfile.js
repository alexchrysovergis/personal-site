const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

function css() {
    return src([
        'node_modules/swiper/swiper-bundle.min.css',
        './src/scss/*.scss' //the src,
    ])
        .pipe(sass())
        .pipe(concat('styles.min.css'))  // concat the scss into a single file
        .pipe(cleanCSS())  // minify it
        .pipe(dest('../htdocs/wp-content/themes/mavericks/dist/css/')); //the compiled css destination
}

function js() {
    return src([
        'node_modules/mmenu-light/dist/mmenu-light.js',
        'node_modules/mmenu-light/dist/mmenu-light.polyfills.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/@popperjs/core/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/swiper/swiper-bundle.min.js',
        './src/js/*.js'  // minify the custom js file
    ])
        .pipe(concat('scripts.min.js')) // concat the js into one file
        .pipe(uglify())  // minify it
        .pipe(dest('../htdocs/wp-content/themes/mavericks/dist/js/')); //the compiled js destination
}

function watchFiles() {
    watch('./src/scss/*.scss', css); // Watch sass files and run the css task on save
    watch('./src/js/*.js', js); // Watch js files and run the js task on save
}

exports.css = css;
exports.js = js;
exports.watch = watchFiles;