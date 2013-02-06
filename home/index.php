<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>ChatWorld</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ChatWorld">
    <meta name="author" content="@mariomd, @memoxmrodlr">
    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
                    <li><a data-toggle="modal" href="#myModal">Agregar</a></li>
                    <li><a href="#">Notificación</a></li>
                    <li><a id="salir" href="#">Salir</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="span3">
            <legend><h3>Contactos</h3></legend>
            <ul class="nav nav-list">
                <li class="nav-header">Conectados</li>
                <li class="nav-header">Desconectados</li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Nuevo contacto</h3>
    </div>
    <div class="modal-body">
        <div class="input-prepend">
            <span class="add-on">@</span>
            <input class="span3" id="prependedInput" type="text" placeholder="Usuario">
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary">Agregar</button>
    </div>
</div>

<script src="../bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="../bootstrap/js/boot.js" type="text/javascript"></script>
</body>
</html>
