<?php
    session_start();
    require_once "mysql.php";
    $usuario = $_POST["usuario"];
    $r = array();

    if($usuario != $_SESSION["usuario_id"]) {
        $ms = new mysql();

        $SQL = "SELECT usuario_id FROM cw_usuarios WHERE usuario = '".$usuario."'";
        $row = $ms->query($SQL);

        if(count($row) >= 1) {
            $SQL = "INSERT INTO cw_contactos (contacto_id,usuario_id,usuario_id_to) VALUES ";
            $SQL .= "(null, '".$_SESSION["usuario_id"]."', '".$row[0]["usuario_id"]."')";
            $ms->query($SQL);

            if($ms->error()) {
                $r["error"] = $ms->message_error();
                $r["add"] = false;
                $ms->Rollback();
            } else {
                $r["add"] = true;
                $ms->Commit();
            }
        } else {
            $r["add"] = false;
            $r["error"] = "No existe usuario";
        }

    } else {
        $r["add"] = false;
        $r["error"] = "No puede agregar a usted mismo";
    }

    echo json_encode($r);