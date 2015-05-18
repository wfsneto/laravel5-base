var elixir = require('laravel-elixir');

var assets_path = 'resources/assets';

elixir( function (mix) {
    mix.less([ 'application.less', 'administration.less' ], 'public/stylesheets')
    .sass([ 'application.scss', 'administration.scss' ], 'public/stylesheets')
    .version('stylesheets/application.css')


    .scripts([
        // Vendors
        'bower/jquery/dist/jquery.min.js',
        // 'bower/bootstrap/dist/js/bootstrap.min.js',
        'bower/materialize/dist/js/materialize.min.js',
        'javascripts/modules/materialize.js',
        'javascripts/downloaded/chosen/chosen.jquery.min.js',
        'javascripts/downloaded/chosen/chosen.jquery.init.js',

        //  Application
        'javascripts/application.js'
    ],
    'public/javascripts/application.js', assets_path)

    .scripts([
        // Vendors
        'bower/jquery/dist/jquery.min.js',
        // 'bower/bootstrap/dist/js/bootstrap.min.js',
        'bower/materialize/dist/js/materialize.min.js',
        'javascripts/modules/materialize.js',
        'javascripts/downloaded/chosen/chosen.jquery.min.js',
        'javascripts/downloaded/chosen/chosen.jquery.init.js',

        //  Modules
        'javascripts/modules/bootstrap.js',

        //  Administration
        'javascripts/administration.js'

    ],
    'public/javascripts/administration.js', assets_path);
});
