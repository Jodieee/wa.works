var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var bourbon = require('bourbon').includePaths; //bourbon is voor sass mixin'


 
//SASS
//------------------------------------------
//------------------------------------------
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({   
                outputStyle: 'compressed',
                includePaths: [bourbon, 'node_modules/susy/sass']
               }).on('error', sass.logError))
     .pipe(autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
    .pipe(sourcemaps.write()) //schrijven sourcemaps css voor inspect element
    .pipe(gulp.dest('.'))
    .pipe( browserSync.stream());
});


//SCRIPTS
//------------------------------------------
//------------------------------------------
 
gulp.task('scripts', function(){
     return gulp.src([
         './js/vendors/*.js',
         './js/init.js'
     ])
    .pipe(sourcemaps.init())
    
    .pipe(concat('scripts.js')) //concat is samenvoegen alle js bestanden in scripts.js
    .pipe(gulp.dest('./js')) //dest is destionation van bestand
    .pipe(rename('scripts.min.js'))
    .pipe( uglify() )
    .pipe(sourcemaps.write()) //schrijven sourcemaps js voor inspect element
    .pipe(gulp.dest('js'))
    .pipe( browserSync.stream());
});



//BROWSER SYNC
//------------------------------------------
//------------------------------------------
 
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "http://localhost:8888/root-skills/"
    });
});



//WATCH
//------------------------------------------
//------------------------------------------
 
gulp.task('watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
    gulp.watch(['js/**/*.js', '!js/scripts.js', '!js/scripts.min.js'], ['scripts']); //!js/scripts.js betekent met uitzondering van deze bestanden
});



//GULP WATCH
//------------------------------------------
//------------------------------------------
 
gulp.task('default', ['sass', 'scripts', 'watch']);