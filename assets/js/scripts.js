$('a[data-event=set_locale]').on('click', function (e) {
    e.preventDefault();
    $('#input_lang').val($(this).data('value'));
    $('#lang_form').prop('action', window.location.href);
    $('#lang_form').submit();
});
