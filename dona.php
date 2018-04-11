<!DOCTYPE html>
<html>
  <head>
    <?php include 'meta.php'; ?>
    <title>Dona | ZZ Identidades</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <section>
      <div id="donar" class="container">
        <div class="row">
          <div class="col-md-4"></div>

          <div class="col-md-4">
            <form id="form-payu">
              <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre ">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder='Cantidad (COP) "Sin Puntos o Comas" '>
              </div>
              <button id="boton-form-top" type="submit" class="btn btn-primary boton-footer"></button>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </section>

    <section id="voluntariado">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <p class="voluntario-title">Sé Voluntario</p>
            <form id="form-voluntario" action="https://formspree.io/info@recicladoravillahermosa.com.co"
        method="POST">
  				    <input type="text" name="name" placeholder="Nombre">
  				    <input type="email" name="_replyto" placeholder="Email">
  						<input type="text" name="phone" placeholder="Teléfono">
              <input type="text" name="phone" placeholder="Cuentanos">
  				    <input type="submit" value="">
  					</form>

          </div>
          <div class="col-md-4">

          </div>

        </div>

      </div>

    </section>



    <?php include 'footer.php'; ?>

  </body>
</html>
