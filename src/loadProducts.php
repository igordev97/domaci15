<?php 
$products = [];
$result = $db->query("SELECT * FROM products");
if($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
}

?>