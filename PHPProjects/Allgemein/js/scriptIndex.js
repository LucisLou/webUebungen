$('#sign-in').hide();
$('#register').hide();

function toggleSignIn() {
    $('#sign-in').fadeIn();
}

function toggleRegister() {
    $('#register').fadeIn();
}

function cancelSignIn() {
    $('#sign-in').fadeOut();
}

function cancelRegister() {
    $('#register').fadeOut();
}