<?php
    session_start();
    require_once "mysql.php";

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $r = array();
    if(!empty($usuario)) {
        if(!empty($password)) {
            $ms = new mysql();
            $SQL = "SELECT * FROM cw_usuarios WHERE usuario = '".$usuario."' AND password = '".$password."'";
            $r = $ms->query($SQL);
            if($r[0]["usuario"] == $usuario) {
                if($r[0]["password"] == $password) {
                    $_SESSION["id"] = $r[0]["usuario_id"];
                    $_SESSION["nombre"] = $r[0]["usuario"];
                    $_SESSION["correo"] = $r[0]["correo"];
                    $r["session"] = true;
                } else $r["session"] = false;
            } else $r["session"] = false;
        } else $r["session"] = false;
    } else $r["session"] = false;

    echo json_encode($r);