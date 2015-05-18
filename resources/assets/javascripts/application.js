var Application = {
    init: function () {
        Materialize.init();
        Chosen.init();
    }
};

$(document).on('ready', function () { Application.init() });
