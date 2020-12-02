$(document).ready(function () {
    function validar() {
      var ok = true;
      $("span.erro").hide();

      var regexpEmail = /@/;
          var nome = $("#campoNome").val().trim();
          var email = $("#campoEmail").val().trim();
          var assunto = $("#campoAssunto").val().trim();
          var mensagem = $("#campoMensagem").val().trim();
          
          if (nome == "") {
              $("#msg-erro-nome").show();
              ok = false;
          }
          
          if (email == "") {
              $("#msg-erro-email-obrigatoria").show();
              ok = false;
          } else if (!regexpEmail.test(email)) {
              $("#msg-erro-email-invalida").show();
              ok = false;
          }
          
          if (assunto == "") {
              $("#msg-erro-assunto").show();
              ok = false;
          }
          
          if (mensagem == "") {
              $("#msg-erro-mensagem").show();
              ok = false;
          }
    }
    $("#form-registo").submit(validar);
  });