var elixir = require('laravel-elixir');

var assets_path = 'resources/assets';

elixir( function (mix) {
    mix.less([ 'application.less', 'administration.less' ], 'public/stylesheets')

    .scripts([
        // Vendors
        'bower/jquery/dist/jquery.min.js',
        'bower/bootstrap/dist/js/bootstrap.min.js',

        //  Application
        'javascripts/application.js'
    ],
    'public/javascripts/application.js', assets_path)

    .scripts([
        // Vendors
        'bower/jquery/dist/jquery.min.js',
        'bower/bootstrap/dist/js/bootstrap.min.js',

        //  Modules
        'javascripts/modules/bootstrap.js',

        //  Administration
        'javascripts/administration.js'

    ],
    'public/javascripts/administration.js', assets_path);
});
