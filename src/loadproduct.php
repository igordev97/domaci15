<?php

$id = $_GET["id"];
$result = $db->query("SELECT * FROM products WHERE id = '$id'");
if($result->num_rows > 0){
    $product = $result->fetch_assoc();
    
}

?>