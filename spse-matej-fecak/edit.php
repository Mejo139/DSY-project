<?php

require_once "../backend/config.php";

$item_id = $_POST["id"];
$item_table = $_POST["table"];

$query = "UPDATE $item_table SET ";
$i = 0;

foreach ($_POST as $key => $value){
    if ($key != "id" && $key != "table"){
        $type = typeOf($value);
        if ($i == 0){
            $query .= "$key = " . ($type == "string" ? "'$value'" : $value);
        }
        else{
            $query .= ",$key = " . ($type == "string" ? "'$value'" : $value);
        }

        $i++;
    }

}

$query .= " WHERE id = $item_id";


echo $query;

$data = $DBConnection->query($query);

if ($data->rowCount() == 1) {
    // done successfully
    die(json_encode([
        "status" => "success"
    ]));
}else{
    die(json_encode([
        "status" => "error",
        "error-cause" => "Something went wrong"
    ]));
}