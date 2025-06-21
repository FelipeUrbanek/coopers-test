$("#mensagem-alerta").hide();

function form() {

    var x;
    if (window.XMLHttpRequest) {
        x = new XMLHttpRequest();
    }
    else {
        x = new ActiveXObject("Microsoft.XMLHTTP");
    }

    x.open("GET", "./email.php?nome=" + $('#nome').val() + "& whatsapp=" + $('#whatsapp').val() + "& email=" + $('#email').val() + "& mensagem=" + $('#mensagem').val(), true);
    x.send();
    $('#mensagem-alerta').fadeIn(800);

    $('#nome').val('');
    $('#whatsapp').val('');
    $('#email').val('');
    $('#mensagem').val('');

    window.setTimeout(function () {
        $('#mensagem-alerta').fadeOut(800);
    }, 3000);
}
