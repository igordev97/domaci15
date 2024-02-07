<?php 


$db = mysqli_connect("127.0.0.1:4306","root","","domaci15");
$products = [];
$result = $db->query("SELECT * FROM products");
if($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
}

?>