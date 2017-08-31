(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 48
  });

  // Collapse the navbar when page is scrolled
  $(window).scroll(function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  });

  // Scroll reveal calls
  window.sr = ScrollReveal();
  sr.reveal('.sr-icons', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 200);
  sr.reveal('.sr-button', {
    duration: 1000,
    delay: 200
  });
  sr.reveal('.sr-contact', {
    duration: 600,
    scale: 0.3,
    distance: '0px'
  }, 300);

  // Magnific popup calls
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

  $(".contact-form button").click(function(e){
    e.stopPropagation();
    e.preventDefault();

    var nome     = $("#input-name").val();
    var email    = $("#input-email").val();
    var mensagem = $("#input-message").val();

    $("#returnMessage").removeClass("active")

    if(nome.length <= 0)
      return contactError(0);
    if(email.length <= 0)
      return contactError(1);
    if(mensagem.length <= 0)
      return contactError(2);

    var request = $.post("message.php",{
      "name" : nome,
      "email" : email,
      "message" : mensagem
    });

    request.done(function(data){
      if(data.substr(0,1) == '1')
        $("#returnMessage").html("Ok, obrigado pelo contato.").addClass("active");
      else
        $("#returnMessage").html("Ops, algo de errado aconteceu.").addClass("active");
    });

    request.fail(function(){
      $("#returnMessage").html("Ops, algo de errado aconteceu.").addClass("active");
        $("#returnMessage").html("Ops, algo de errado aconteceu").addClass("active");
    });

    request.fail(function(){
      $("#returnMessage").html("Ops, algo de errado aconteceu").addClass("active");
    });
  });


  var contactError = function(errorCode){

    switch(errorCode){
      case 0:
        $("#returnMessage").html("Qual é o seu nome mesmo? ").addClass("active");
        $("#input-name").focus();
        break;
      case 1:
        $("#returnMessage").html("Você esqueceu de informar seu e-mail :O").addClass("active");
        $("#input-email").focus();
        break;
      case 2:
        $("#returnMessage").html("Ah, manda uma mensagem pra gente!").addClass("active");
        $("#input-message").focus();
        break;
    }
  };

  var x = document.getElementsByClassName("nano")[0].children[1];
  x.style.backgroundColor="#fff";
  x.style.zIndex="1000";
  x.style.boxShadow="0px 0px 10px #000";

})(jQuery); // End of use strict
