<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/css-registro.css
">

  <title>Registro</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="container">

    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
        <header>
          <h1>Registro</h1>
        </header>
      </div>
    </div>

    <form action="login.controller.php" method="POST" class="register-form">

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only control-label" for="primer-nombre">Nombre</label>
          <input name="nombre" value="" class="form-control" type="text" placeholder="Nombre">
        </div>
      </div>

    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
        <label class="sr-only" for="email">E-mail</label>
        <input name="email" value="" class="form-control" type="email" placeholder="E-mail">
      </div>
    </div>

    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
        <label class="sr-only" for="password">Password</label>
        <input name="password" value="" class="form-control" type="password" placeholder="Password">
      </div>
    </div>

      <div class="row">
        <div class="form-check col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="form-check-label">
          ¿Qué tipo de actividades te interesan más? <br/>
          <br/>
            <input class="form-check-input" name="sitio[internet]" type="checkbox" value="internet">
              Literatura
            <input class="form-check-input" name="sitio[amigos]" type="checkbox" value="amigos">
              Arte
            <input class="form-check-input" name="sitio[paloma]" type="checkbox" value="paloma">
              Cine
            <input class="form-check-input" name="sitio[paloma]" type="checkbox" value="paloma">
              Narración
          </label>
        </div>

        <div class="row">
          <div class="form-check form-check-inline col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <label class="form-check-label"> Sexo
              <br>
              <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
              Maculino
              <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
              Femenino
              <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
              Otro
            </label>
          </div>
        </div>
      </div>

      <div class="row ccol-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
        <select class="custom-select">
            <option selected>¿Cuántos libros lees por año?</option>
            <option value="1">Uno a cinco</option>
            <option value="2">Cinco a diez</option>
            <option value="3">Más de diez</option>
        </select>
      </div>



      <form class="form-inline" action="" method="post">
        <div class="row form-group">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <button class="btn btn-mg btn-block regbutton">Registrate</button>
          </div>
        </div>
      </form>


    </form>


    </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
