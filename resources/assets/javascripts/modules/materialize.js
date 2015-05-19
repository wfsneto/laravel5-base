var MaterializeInit = {
    init: function () {
        this.sideNav();
        this.tooltip();
        this.leanModal();
    },

    sideNav: function () {
        $(".button-collapse").sideNav();
    },

    tooltip: function () {
        $('.tooltipped').tooltip({delay: 50});
    },

    leanModal: function () {
        $('.modal-trigger').leanModal();
    }
};
