<?php
    session_start();
    require_once "mysql.php";
    $usuario = $_POST["usuario"];

    if($usuario != $_SESSION["usuario_id"]) {
        $ms = new mysql();
        $SQL = "INSERT INTO cw_contactos (contacto_id,usuario_id,usuario_to_id) VALUES ";
        $SQL .= "(null, '".$_SESSION["usuario_id"]."', '".$usuario."')";
        $ms->query($SQL);
    } else {

    }