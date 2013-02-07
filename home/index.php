<?php
    require_once "../controller/mysql.php";
    session_start();
?>
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

        <div class="span2">
            <legend><h3>Contactos</h3></legend>
            <ul id="" class="nav nav-tabs nav-stacked">
                <?php
                    $ms = new mysql();
                    $SQL = "SELECT A.usuario_id, A.usuario FROM cw_usuarios A INNER JOIN cw_contactos B ";
                    $SQL .= "ON A.usuario_id = B.usuario_id_to WHERE ";
                    $SQL .= " B.usuario_id = ".$_SESSION["usuario_id"]."";
                    $row = $ms->query($SQL);

                    foreach($row as $i => $v) {
                        echo "<li class=\"\"><a href=\"#\">".$row[$i]["usuario"]."</a></li>\n";
                    }
                ?>
            </ul>
        </div>

        <div class="span7">
            <?php
                $SQL = "SELECT * FROM ";
                $SQL .= "(cw_chat A INNER JOIN cw_contactos B ON A.contacto_id = B.contacto_id) ";
                $SQL .= "INNER JOIN cw_usuarios D ON B.usuario_id_to = D.usuario_id ";
                $SQL .= "WHERE B.usuario_id = ".$_SESSION["usuario_id"]."";
                $row = $ms->query($SQL);
                //var_dump($row);
            ?>
            <h3>Mensajes</h3>
            <div id="chatt" class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
                <ul class="nav nav-tabs">
                    <?php
                        //<li class="active"><a href="#tab1" data-toggle="tab">osiris</a></li>
                        //<li><a href="#tab2" data-toggle="tab">marioxmd</a></li>
                        foreach($row as $i => $v) {
                            if($i == 0) {
                                echo "<li class=\"active\"><a id=\"".$row[$i]["contacto_id"]."\" href=\"#tab".($i+1)."\" data-toggle=\"tab\">".$row[$i]["usuario"]."</a></li>";
                            } else {
                                echo "<li><a id=\"".$row[$i]["contacto_id"]."\" href=\"#tab".($i+1)."\" data-toggle=\"tab\">".$row[$i]["usuario"]."</a></li>";
                            }
                        }
                    ?>
                </ul>

                <div class="tab-content">
                    <?php
                    /*<div class="tab-pane active" id="tab1">
                    <textarea rows="15" class="span4" style="text-align: left"></textarea>
                    <div class="controls controls-row">
                    <input class="span3" type="text">
                    <button type="button" class="span1 btn btn-info">Enviar</button>
                    </div>
                    </div>

                    <div class="tab-pane" id="tab2">
                    <textarea rows="15" class="span4" style="text-align: left"></textarea>
                    <div class="controls controls-row">
                    <input class="span3" type="text">
                    <button type="button" class="span1 btn btn-info">Enviar</button>
                    </div>
                    </div>*/

                        foreach($row as $i => $v) {

                            $message = str_replace("\\n", "\n", $row[$i]["message"]);
                            if($i == 0) {
                                echo "<div class=\"tab-pane active\" id=\"tab".($i+1)."\">".
                                    "<textarea rows=\"15\" class=\"span4\" style=\"text-align: left\">".$message."</textarea>".
                                    "<div class=\"controls controls-row\">".
                                    "<input class=\"span3\" type=\"text\">".
                                    "<button type=\"button\" class=\"span1 btn btn-info\">Enviar</button>".
                                    "</div>".
                                    "</div>";
                            } else {
                                echo "<div class=\"tab-pane\" id=\"tab".($i+1)."\">".
                                    "<textarea rows=\"15\" class=\"span4\" style=\"text-align: left\">".$message."</textarea>".
                                    "<div class=\"controls controls-row\">".
                                    "<input class=\"span3\" type=\"text\">".
                                    "<button type=\"button\" class=\"span1 btn btn-info\">Enviar</button>".
                                    "</div>".
                                    "</div>";
                            }
                        }

                    ?>
                </div>
            </div>
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
            <input id="text_agregar_usuario" class="span3" id="prependedInput" type="text" placeholder="Usuario">
        </div>
    </div>
    <div class="modal-footer">
        <div id="message_error_registro"></div>
        <button id="submit_agregar_usuario" class="btn btn-primary">Agregar</button>
    </div>
</div>
<div id="user_session" style="visibility: hidden"><?php echo $_SESSION["nombre"]; ?></div>
<script src="../bootstrap/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="../bootstrap/js/boot.js" type="text/javascript"></script>
</body>
</html>
