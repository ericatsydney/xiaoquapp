//var elixir = require('laravel-elixir');
//
///*
// |--------------------------------------------------------------------------
// | Elixir Asset Management
// |--------------------------------------------------------------------------
// |
// | Elixir provides a clean, fluent API for defining some basic Gulp tasks
// | for your Laravel application. By default, we are compiling the Sass
// | file for our application, as well as publishing vendor resources.
// |
// */
//
//elixir(function(mix) {
//    mix.sass('app.scss');
//});
// option 1: default format, equivelant to using `phpunit` in command line (no options)

var gulp = require('gulp'),
  notify  = require('gulp-notify'),
  phpunit = require('gulp-phpunit');

gulp.task('phpunit', function() {
  var options = {debug: false, notify: true};
  gulp.src('tests/UserTest.php')
    .pipe(phpunit('', options))
    .on('error', notify.onError({
      title: "Failed Tests!",
      message: "Error(s) occurred during testing..."
    }));
});

gulp.task('default', function(){
  gulp.run('phpunit');
  gulp.watch('app/**/*.php', function(){
    gulp.run('phpunit');
  });
});