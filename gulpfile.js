var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('global.scss').coffee('admin_common.coffee');

    mix.styles([
        'vendor/bootstrap.min.css',
        'vendor/font-awesome.min.css',
        'vendor/ionicons.min.css',
        'vendor/AdminLTE.min.css',
        'vendor/skin-blue.min.css',
        'global.css',
    ], 'public/css/admin.css', 'public/css');

    mix.scripts([
        'vendor/jquery.min.js',
        'vendor/bootstrap.min.js',
        'vendor/jquery.slimscroll.min.js',
        'vendor/fastclick.min.js',
        'vendor/AdminLTE.min.js',
        'admin_common.js',
    ], 'public/js/admin.js', 'public/js');

    mix.version([
        'public/css/admin.css',
        'public/js/admin.js'
    ]);
});
