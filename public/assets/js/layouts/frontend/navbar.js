$( "#navbar" ).click(function() {
    if ($("#nav").hasClass("navbar bb")) {
        document.getElementById("nav").className = "navbarmin";
      }
    else if ($("#nav").hasClass("navbarmin")){
        document.getElementById("nav").className = "navbar bb";
      }
  });
  $( "#imgnav" ).click(function() {
    window.location.href = "/";
  });

  function test(){
    window.location="/";
  }
  function test2(){
    window.location="/contactos";
  }
