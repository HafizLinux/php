<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Commerce Landing Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">E-Commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="admin/login.php">Login Admin</a>
            </li>
        </ul>
        </div>
    </div>
  </nav>

  <header class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Welcome to our E-Commerce Store</h1>
      <p class="lead">Browse our wide range of products and find great deals.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Shop Now</a>
    </div>
  </header>

  <div class="mt-5 mb-5">
    <section class="container">
        <div class="mb-4">
            <h2>Featured Products</h2>
        </div>
        <div class="row">
        <div class="col-md-4">
            <div class="card">
            <img src="https://asset.kompas.com/crops/PdKQ8JEec1uH477e64QGdeYVWWI=/28x0:612x389/750x500/data/photo/2021/03/29/6061aaa779b88.png" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">Description of product 1.</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <img src="https://tikijne.co.id/wp-content/uploads/sites/29/2018/01/Pengiriman-Barang-Cepat-Dengan-JNE.jpg" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">Description of product 2.</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <img src="https://s4.bukalapak.com/bukalapak-kontenz-production/content_attachments/72994/original/stock_barang.jpg" class="card-img-top" alt="Product 3">
            <div class="card-body">
                <h5 class="card-title">Product 3</h5>
                <p class="card-text">Description of product 3.</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
            </div>
        </div>
        </div>
    </section>
  </div>

  <footer class="bg-dark text-white text-center p-3">
    <p>&copy; 2023 </p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
