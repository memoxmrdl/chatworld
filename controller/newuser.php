<?php
    require_once "mysql.php";

    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $r = array();

    if(!empty($usuario)&&!empty($email)&&!empty($password)) {
        $ms = new mysql();
        $ms->BeginTransaction();
        $SQL = "INSERT INTO cw_usuarios (usuario_id,usuario,correo,password) VALUES ";
        $SQL .= "(null, '".$usuario."', '".$email."', '".$password."')";
        $ms->query($SQL);
        if($ms->error()) {
            $r["error"] = $ms->message_error();
            $r["add"] = false;
            $ms->Rollback();
        } else {
            $r["add"] = true;
            $ms->Commit();
        }
        echo json_encode($r);
    }

