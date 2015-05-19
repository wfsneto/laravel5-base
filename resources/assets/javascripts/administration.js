var Administration = {
    init: function () {
        MaterializeInit.init();
        Chosen.init();
    }
};

$(document).on('ready', function () { Administration.init(); })
