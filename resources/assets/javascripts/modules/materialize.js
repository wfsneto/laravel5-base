var Materialize = {
    init: function () {
        this.sideNav();
        this.leanModal();
    },

    sideNav: function () {
        $(".button-collapse").sideNav();
    },

    leanModal: function () {
        $('.modal-trigger').leanModal();

    }
};
