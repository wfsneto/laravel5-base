var Chosen = {
    init: function () {
        this.simple();
    },

    simple: function () {
        $('select').not('.phpdebugbar-datasets-switcher, .no-chosen').chosen();
    }
}
