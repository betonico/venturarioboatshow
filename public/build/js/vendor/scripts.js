$(document).ready(function () {

    jQuery("#cpf").mask("999.999.999-99");
    jQuery("#telefone").mask("(99) 99999-999?9");
    jQuery("#whatsapp").mask("(99) 99999-999?9");

    $('.select_quest_form input:radio').click(function () {
        if ($(this).val() == '0') {
            $('.input_quest').fadeIn();
            $('.input_quest input:text').prop('required', true);
        } else {
            $('.input_quest').fadeOut();
            $('.input_quest input:text').prop('required', false);
        }
    });

    $('.send_insert').submit(function (event) {
        $('.send_btn_action').hide();
        $('.send_btn_loading').show();
    });
});





