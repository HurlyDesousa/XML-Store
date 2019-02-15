
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>XML Validator</title>
</head>
<body>
  <center>
    <?php

    $check = file_exists('data.xml');
    if($check === FALSE) {
      echo "There is no XML file in the root directory!";
    } else {
      $xml = new DOMDocument;
      $xml->Load('data.xml');
      if ($xml->validate()) {
        echo "<h2>XML Validator</h2>";
        echo "The XML document is valid!\n<br>";
        echo "XML file data has been written into the database called xmlrecordingshop.\n";





        // create php variables from xml file


        $coffees = $xml->getElementsByTagName( "coffee" );
        foreach( $coffees as $coffee )
        {

          $category = $coffee->getElementsByTagName( "category" );
          $category = $category->item(0)->nodeValue;

          $description = $coffee->getElementsByTagName( "description" );
          $description = $description->item(0)->nodeValue;

          $name = $coffee->getElementsByTagName( "name" );
          $name = $name->item(0)->nodeValue;

          $price = $coffee->getElementsByTagName( "price" );
          $price = $price->item(0)->nodeValue;

          $quantity = $coffee->getElementsByTagName( "quantity" );
          $quantity = $quantity->item(0)->nodeValue;

          $img = $coffee->getElementsByTagname( "img" );
          $img = $img->item(0)->nodeValue;

          // echo $category."<br>";
          // echo $description."<br>";
          // echo $name."<br>";
          // echo $price."<br>";
          // echo $quantity."<br>";
          // echo $img."<br>";




        // conecting to mysql db, and recording the data
          include 'includes/dbh.inc.php';

          $sql = "INSERT INTO product (productcategory, productname, productdescription, productprice, productquantity, productimg) VALUES (?, ?, ?, ?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: products.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_bind_param($stmt, "sssiis", $category, $name, $description, $price, $quantity, $img);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

          }
        }
      }
    }

    ?><br>
    <a href="products.php">back</a></center>
  </body>
  </html>
