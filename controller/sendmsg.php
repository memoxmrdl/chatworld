<?php
    require_once "mysql.php";

    $ms = new mysql();

    $contacto_id = $_POST["contacto_id"];
    $message = $_POST["message"];

    $SQL = "SELECT message FROM cw_chat WHERE contacto_id = ".$contacto_id."";
    $row = $ms->query($SQL);


    $message = $row[0]["message"].$message;

    $SQL = "UPDATE cw_chat SET message = '".$message."' WHERE contacto_id = ".$contacto_id."";
    $ms->query($SQL);