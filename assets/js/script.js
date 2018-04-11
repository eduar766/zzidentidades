$('.carousel').carousel({
  interval: 2000
})


$(document).ready(function(){
  var x = document.getElementsByTagName('title')
  x = x[0].outerText.toString();

  if (x == "Contacto | ZZ Identidades") {
    $('.top-container').css('background-color', '#6bb6da')
  }else if (x == "Video | ZZ Identidades"){
    $('.top-container').css('background-color', '#6c9229')
  }else if (x == "Galeria | ZZ Identidades"){
    $('.top-container').css('background-color', '#9f00d0')
  }else if (x == "Patrocinadores | ZZ Identidades"){
    $('.top-container').css('background-color', '#f702fb')
  }else if (x == "Nosotros | ZZ Identidades"){
    $('.top-container').css('background-color', '#9f00d0')
  }else if (x == "Dona | ZZ Identidades"){
    $('.top-container').css('background-color', '#6c9229')
  }else if (x == "ZZ Identidades"){
    $('.top-container').css('background-color', '#f702fb')
  }else if (x == "Fundacion Vida Sana | ZZ Identidades"){
    $('.top-container').css('background-color', '#6bb6da')
  }else if (x == "Fundacion Generando Opciones | ZZ Identidades"){
    $('.top-container').css('background-color', '#3b6092')
  }

});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({alwaysShowClose: true});
});
