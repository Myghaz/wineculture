$(".log-in").click(function () {
    $(".signIn").addClass("active-dx");
    $(".signUp").addClass("inactive-sx");
    $(".signUp").removeClass("active-sx");
    $(".signIn").removeClass("inactive-dx");
});

$(".back").click(function () {
    $(".signUp").addClass("active-sx");
    $(".signIn").addClass("inactive-dx");
    $(".signIn").removeClass("active-dx");
    $(".signUp").removeClass("inactive-sx");
});
var p_c = $('#signupcpassword');
var p = $('#signuppassword');
if (p.val() != p_c.val()) {
    $('#registar').attr("disabled", true);
} else {
    $('#registar').attr("disabled", false);
}
$('.password').on('keyup', function () {
    if (p.val().length > 0) {
        if (p.val() != p_c.val()) {
            $('#valid').html("As Passwords não coincidem!");
            $('#registar').attr("disabled", true);
        } else {
            $('#valid').html('');
            $('#registar').attr("disabled", false);
        }
        var s = 'Fraca'
        if (p.val().length > 5 && p.val().match(/\d+/g))
            s = 'Média';
        if (p.val().length > 6 && p.val().match(/[^\w\s]/gi))
            s = 'Forte';
        $('#strong span').addClass(s).html(s);
    }
});
