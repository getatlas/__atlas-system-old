var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.copy(
        'bower_components/foundation-sites/scss',
        'resources/assets/sass/foundation'
    );

    mix.copy(
        'resources/assets/img',
        'public/img'
    );

    mix.copy(
        'resources/assets/img/favicon',
        'public/favicon'
    );

    mix.sass('style.scss');

    mix.version(['*']);
});
