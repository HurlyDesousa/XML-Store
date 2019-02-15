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
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 20px;
  }
</style>

</head>

<body onload="loadXMLDoc()">

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



  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">To validate XML file...<a href="validateXML.php">click here</a></span>
              <span class="section-heading-lower">Coffee Products</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-01.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <h2>Products on Record:</h2>
              <script>
              function loadXMLDoc() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                  }
                };
                xmlhttp.open("GET", "data.xml", true);
                xmlhttp.send();
              }
              function myFunction(xml) {
                var i;
                var xmlDoc = xml.responseXML;
                var table="<tr><th>Category</th><th>Description</th><th>Name</th><th>Price</th><th>Quantity Available</th><th>Image</th></tr>";
                var x = xmlDoc.getElementsByTagName("coffee");
                for (i = 0; i <x.length; i++) {
                  table += "<tr><td>" +
                  x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue +
                  " Roast</td><td>" +
                  x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue +
                  " bag</td><td>" +
                  x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
                  "</td><td>R" +
                  x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +
                  "</td><td>" +
                  x[i].getElementsByTagName("quantity")[0].childNodes[0].nodeValue +
                  " Bags</td><td><img src='img/" +
                  x[i].getElementsByTagName("img")[0].childNodes[0].nodeValue +
                  "'></td></tr>";
                }
                document.getElementById("demo").innerHTML = table;
              }
              </script>
            <br><br>
            <table id="demo"></table>
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

</html>
