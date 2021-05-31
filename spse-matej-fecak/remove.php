<?php

require_once "../backend/config.php";

$item_id = $_POST["id"];
$item_table = $_POST["table"];

$query = "DELETE FROM $item_table WHERE id = $item_id";
$data = $DBConnection->query($query);

if ($data->rowCount() == 1) {
    die(json_encode([
        "status" => "success"
    ]));
}else{
    die(json_encode([
        "status" => "error",
        "error-cause" => "Something went wrong"
    ]));
}
