<?php
    $uploadStatus = false;
    if(!isset($_POST["name"]) || empty($_POST["name"])){
        die("Niste uneli ime proizvoda");
    }
    if(!isset($_POST["description"]) || empty($_POST["description"])){
        die("Niste uneli opis proizvoda");
    }
    if(!isset($_POST["price"]) || empty($_POST["price"])){
        die("Niste uneli cenu proizvoda");
    }
    if($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_NO_FILE){
        die("Niste odabrali sliku proizvoda");
    }

    

    require_once "./database.php";
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $fileToUploadName = $_FILES["fileToUpload"]["name"];
    $fileToUploadTmp = $_FILES["fileToUpload"]["tmp_name"];
    $fileDestination = "../images/".$fileToUploadName;
    move_uploaded_file($fileToUploadTmp, $fileDestination);

    $result = $db->query("INSERT INTO products (product_name,product_description,price,img_name) VALUES ('$name' ,'$description','$price','$fileToUploadName')");

    if($result){
      $message = "Uspesno ste kreirali proizvoda";
      $uploadStatus = true;
    }else{
        $uploadStatus = false;
        $message =  "Nazalost niste dodatali novi proizvod pokusajte ponovo";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($uploadStatus):?>
            <p class='text-success'><?=$message?></p>
            <a href="../">Pocetna -></a>
    <?php endif?>

        <?php if(!$uploadStatus):?>
        <p class='text-danger'><?=$message?></p>
        <a href="../newproduct.php">Pokusaj ponovo -></a>

    <?php endif?>
</body>
</html>