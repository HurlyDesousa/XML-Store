<?php


echo '<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop-Okay Supermarket</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

    <link rel="icon" href="img/fav.png" type="image/gif" sizes="16x16">

    <style>
      label {
        float: left;
      }
      input {
        float: right;
      }
    </style>
  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Recorded Supplies for</span>
      <span class="site-heading-lower">Shop-Okay Supermarket</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Shop-Okay Supermarket</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Search Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Record New Item</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
          <!-- <div class="test" style="position: relative; padding: 3rem; margin: .5rem; background-color:rgba(255,255,255,.85); border-radius: .5rem;">-->
          <div class="cta-inner text-center rounded" style="border:solid;">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Fill out the form</span>
                <span class="section-heading-lower">Add a New item</span>
              </h2>
              <form class="" action="login.inc.php" method="post">
                <input type="text" name="user" value="">
                <input type="password" name="pwd" value="">
                <input type="submit" name="submit" value="">
              </form>
              <form class="mainform" action="#" method="post">
                <label for="productcategory">product category</label><br>
                <input type="text" name="productcategory" id="productcategory" value="" required><br>
                <label for="productname">product name</label><br>
                <input type="text" name="productname" id="productname" value="" required><br>
                <label for="productdescription">product description</label><br>
                <input type="text" name="productdescription" id="productdescription" value="" required><br>
                <label for="productprice">productprice</label><br>
                <input type="number" name="productprice" id="productprice" value="" required><br>
                <label for="productquantity">product quantity</label><br>
                <input type="number" name="productquantity" id="productquantity" value="" required><br><hr>
                <input type="submit" name="productsubmit" value="Add product"><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Add a comment below:</span>
                  </h2>
                  <form class="comment" action="#" method="post">
                    <input type="text" name="comment" value="">
                    <input type="submit" name="commentsubmit" value="comment">
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Shop-Okay Supermarket <script>document.write(new Date().getFullYear())</script></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $(".list-hours li").eq(new Date().getDay()).addClass("today");
  </script>

</html>
'; ?>
