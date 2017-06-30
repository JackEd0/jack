$('a[role=button]').on('click', function (event) {
    event.preventDefault();
});
$( document ).ready(function() {
    setTimeout(function () {
        $(".notice-success").fadeOut();
    }, 5000);
});
