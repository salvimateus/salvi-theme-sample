/* jshint esversion: 6 */

let gulp = require( 'gulp' );
let cleanCSS = require( 'gulp-clean-css' );
let sass = require( 'gulp-sass' );
let autoprefixer = require( 'gulp-autoprefixer' );

gulp.task( 'default', ( done ) => { // construtor do comando gulp
    done();
} );

gulp.task( 'sass', () => {
    return gulp.src( './assets/css/sass/*.scss' )
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe( autoprefixer() )
    .pipe( cleanCSS( {compatibility: 'ie8'} ) )
    .pipe( gulp.dest( './assets/css' ) );
} );

gulp.task( 'watch', () => {
    gulp.watch( './assets/css/**/*.scss', gulp.series( 'sass' ) ); // duplique essa linha para outra tarefa
} );
