<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>ChatWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ChatWorld">
    <meta name="author" content="@mariomd, @memoxmrodlr">
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
                    <input id="user" type="text" placeholder="Usuario" class="input-medium">
                    <input id="pwd" type="password" placeholder="Contraseña" class="input-medium">
                    <button id="submit_login" type="button" class="btn">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2>ChatWorld</h2>
    <h5>Donde la gente se comunica y se divierte platicando...</h5>
    <div class="container">
        <div class="row">
            <div class="span4">
            <form>
                <fieldset>
                    <legend><h3>Regístrate</h3></legend>
                    <div id="message_error_registro"></div>
                        <div class="input-prepend">
                            <span class="add-on">@</span>
                            <input class="span2" id="usuario" type="text" placeholder="Usuario" required>
                        </div>
                        <input type="text" id="email1" placeholder="Correo electronico" class="input-xlarge" required><br>
                        <input type="text" id="email2" placeholder="Escribe de nuevo el correo electronico" class="input-xlarge" required><br>
                        <input type="password" id="password" placeholder="Contraseña" class="input-xlarge" required><br>
                        <button type="button" id="submit_registro" class="btn btn-primary btn-block">Registrarme</button>
                </fieldset>
            </form>
            </div>
    </div>
</div>
<script src="bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="bootstrap/js/boot.js" type="text/javascript"></script>
</body>
</html>
