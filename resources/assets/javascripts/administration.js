var Administration = {
    init: function () {
        Materialize.init();
        Chosen.init();
    }
};

$(document).on('ready', function () { Administration.init(); })
