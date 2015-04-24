var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.less([ 'application.less', 'administration.less' ], 'public/stylesheets');

    mix.scripts([
        // Vendors
        'bower/jquery/dist/jquery.min.js',
        'bower/bootstrap/dist/js/bootstrap.min.js',

        //  application
        'javascripts/application.js'
    ],
    'public/javascripts/application.js', 'resources/assets');

    mix.scripts([
        // Vendors
        'bower/jquery/dist/jquery.min.js',
        'bower/bootstrap/dist/js/bootstrap.min.js',

        //  application
        'javascripts/administration.js'

    ],
    'public/javascripts/administration.js', 'resources/assets');
});
