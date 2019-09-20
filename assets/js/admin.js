$(function () {
    /* MODAL */
    var target = '';
    $('[data-toogle="modal"]').click(function (evt) {
        evt.preventDefault();
        target = $(this).data('target');
        $(target).show();
        $('body').toggleClass('modal-open');
    });
    $(window).click(function (evt) {
        if (evt.target.className === 'modal' || evt.target.className === 'close') {
            $(target).hide();
            $('body').toggleClass('modal-open');
        }
    });
});