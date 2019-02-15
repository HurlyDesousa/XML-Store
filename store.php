<?php
session_start();
?>
<!DOCTYPE html>
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
            <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
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
      <?php
      if (isset($_SESSION['userIdSession'])) {
        echo'<div class="row">
        <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded" style="border:solid;">
        <h2 class="section-heading mb-5">
        <span class="section-heading-upper">Fill out the form</span>
        <span class="section-heading-lower">Add a New item</span>
        </h2>
        <form class="mainform" action="writeToXML.php" method="post">
        <label for="productcategory">Product Category:</label>
        <select name="productcategory" size="1" id="productcategory" style="height:30px;width:189px;float:right;">
        <option value="Light">Light Roast</option>
        <option value="Medium">Medium Roast</option>
        <option value="Mediumdark">Medium-Dark Roasts</option>
        <option value="Dark">Dark Roasts</option></select required><br><hr>
        <label for="productname">Product Name:</label>
        <input type="text" name="productname" id="productname" value="" required><br><hr>
        <label for="productdescription">Product Size:</label>
        <select name="productdescription" size="1" id="productdescription" style="height:30px;width:189px;float:right;">
        <option value="small">small</option>
        <option value="medium">medium</option>
        <option value="large">large</option>
        <option value="other">other</option></select required><br><hr>
        <label for="productprice">Product Price:</label><b style="height:30px;width:189px;float:right;">ZAR</b>
        <input type="number" name="productprice" id="productprice" value="" style="height:30px;width:189px;float:right;" required><br><hr>
        <label for="productquantity">Product Quantity:</label><b style="height:30px;width:189px;float:right;">Bags</b>
        <input type="number" name="productquantity" id="productquantity" value="" style="height:30px;width:189px;float:right;" required><br><hr>
        <label for="fileToUpload">Select image to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" style="float:right;"><br><hr>
        <input type="submit" name="productsubmit" value="Add product"><br>
        </form>
        </div>
        </div>
        </div>
        </div>
        <center><a href="includes/logout.inc.php" style="float:right; margin-right:45%;">exit application</a></center>
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
        ';
      }
      else {

        echo '
        <center>
        <form class="" action="includes/login.inc.php" method="post">
        <fieldset>
        <legend>Login to add products:</legend><hr>
        <input type="submit" name="login-submit" value="login">
        <input type="password" name="pwd" value="" placeholder="Password">
        <input type="text" name="user" value="" placeholder="Username">
        </fieldset><hr>
        </form>
        </center>';
      }
      ?>

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
