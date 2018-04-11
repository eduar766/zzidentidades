<!DOCTYPE html>
<html>
  <head>
    <?php include 'meta.php'; ?>
    <title>Contacto | ZZ Identidades</title>
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div class="container map">
  		<div class="row">
  			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.996714487098!2d-73.11556158603925!3d7.126375094853969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e681567310b020f%3A0x130ed28f17ba26f0!2sRivera+Plaza!5e0!3m2!1ses-419!2sve!4v1520041156877" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  		</div>
  	</div>

  	<section id="nosotros-datos">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-6 principal">
  					<h4>Principal</h4>
  					<h6>Diagonal 98 Sur #6D - 05 Este</h6>

  					<ul class="nosotros-contactos">
  						<a href="tel:+573209042934"><li class="icon-phone"><span> + 57 320 904 2934 </span></li></a>
  						<a href="tel:+573144330754"><li class="icon-phone"> <span>+ 57 0 (3) 1 7227575 </span></li></a>
  						<a href="#"><li class="icon-marca"> <span>Barrio</span> </li></a>
  						<a href="#"><li class="icon-sector"> <span>Localidad Usme </span></li></a>
  						<a href="#"><li class="icon-mail"> <span>Telefax. 6945564 </span></li></a>
  						<a href="mailto:info@recicladoravillahermosa.com.co"><li class="icon-mail"> <span>info@recicladoravillahermosa.com.co </span></li></a>
  						<a href="#"><li class="icon-marca"> <span>Bogotá - Colombia </span></li></a>
  					</ul>
  				</div>

  				<div class="col-md-6">

  					<form id="contacto-form" action="https://formspree.io/info@recicladoravillahermosa.com.co"
        method="POST">
  				    <input type="text" name="name" placeholder="Nombre">
  				    <input type="email" name="_replyto" placeholder="Email">
  						<input type="text" name="phone" placeholder="Teléfono">
  						<textarea name="mensaje" rows="8" cols="80" placeholder="Mensaje"></textarea>
  				    <input id="submit-contacto" type="submit" value="Enviar">
  					</form>


  				</div>
  			</div>
  		</div>
  	</section>



    <?php include 'footer.php'; ?>

  </body>
</html>
