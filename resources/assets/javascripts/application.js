var Application = {
    init: function () {
        MaterializeInit.init();
        Chosen.init();
    }
};

$(document).on('ready', function () { Application.init() });
