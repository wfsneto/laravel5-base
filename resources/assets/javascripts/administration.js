var Administration = {
    init: function () {
        Bootstrap.init();
        Chosen.init();
    }
};

$(document).on('ready', function () { Administration.init(); })
