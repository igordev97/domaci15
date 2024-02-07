<?php
$message = "";
$products = [];
$pretraga = $_GET['pretraga'];
$result = $db->query("SELECT * FROM products WHERE product_name LIKE '%$pretraga%' OR product_description LIKE '%$pretraga%' ");

if($result->num_rows > 0){
    $products = $result->fetch_all(MYSQLI_ASSOC);
}
else{
    $message = "Nismo pronasli ni jedan rezultat";
}


?>