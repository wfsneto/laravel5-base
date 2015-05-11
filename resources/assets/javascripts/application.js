var Application = {
    init: function () {
        Bootstrap.init();
        Chosen.init();
    }
};

$(document).on('ready', function () { Application.init() });
