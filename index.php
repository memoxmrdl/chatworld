<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>ChatWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">ChatWorld</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="nav-collapse">
                <form class="navbar-form pull-right">
                    <input type="text" placeholder="Email..." class="input-medium">
                    <input type="text" placeholder="Contraseña..." class="input-medium">
                    <button type="submit" class="btn">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2>ChatWorld</h2>
    <p><h5>Donde la gente se comunica y se divierte platicando...</h5></p>
    <br>
    <div class="container">
        <div class="row">
            <form>
                <fieldset>
                    <legend><h3>Regístrate</h3></legend>
                    <input type="text" placeholder="Nombre"><br>
                    <input type="text" placeholder="Apellidos"><br>
                    <input type="text" placeholder="Correo electronico" class="input-xlarge"><br>
                    <input type="text" placeholder="Escribe de nuevo el correo electronico" class="input-xlarge"><br>
                    <input type="password" placeholder="Contraseña" class="input-xlarge"><br>
                    <button type="submit" class="btn btn-primary btn-large">Registrarme</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap-transition.js"></script>

</body>
</html>
