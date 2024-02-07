<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj proizvod</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body><div class="container-fluid m-0 p-0">
<nav class="navbar bg-danger text-light ">
  <div class="container-fluid">
    <a class="navbar-brand text-light">IGGY Shop</a>
    <a class="nav-item nav-link active" href="./">Pocetna</a>
    <a class="nav-item nav-link" href="./newproduct.php">Dodaj proizvod</a>
    <form class="d-flex" role="search" action="search.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Pretrazi proizvod" aria-label="Search" name='pretraga'>
      <button class="btn btn-outline-light" type="submit">Pretrazi</button>
    </form>
  </div>
</nav></div>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <h1>Kreirajte novi proizvod</h1>
            <form action="./src/addProduct.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="form-label">Ime proizvoda</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="form-group my-3">
                    <label for="description" class="form-label">Opis proizvoda</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="price" class="form-label">Cena proizvoda</label>
                    <input type="number" class="form-control" id="price" name="price" >
                </div>

                <div class="form-group  my-3">
                    <label for="image" class="form-label">Slika proizvoda</label>
                    <input type="file" name="fileToUpload" class="form-control" >
                </div>


                <button class="btn btn-primary my-5">Dodaj proizvod</button>

            </form>
        </div>
    </div>
</div>


<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
</body>
</html>