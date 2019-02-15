<?php

if(isset($_POST['productsubmit'])){
  $check = file_exists('data.xml');
  if($check === FALSE) {

    //echo "Create from scratch!";


    $imp = new DOMImplementation();
    $xml = $imp->createDocument(
      null,
      null,
      $imp->createDocumentType('shop', null, 'coffee.dtd' )
    );

    $xml->xmlVersion = "1.0";
    $xml->encoding = "UTF-8";

    $xml_shop = $xml->createElement( "shop" );
    $xml_coffee = $xml->createElement( "coffee");

    // Call the input variables from the form and assign ocifetchstatement
    $category = $_POST['productcategory'];
    $description = $_POST['productdescription'];
    $name = $_POST['productname'];
    $price = $_POST['productprice'];
    $quantity = $_POST['productquantity'];
    $img = $_POST['fileToUpload'];

    // Create another element, just to show you can add any (realistic to computer) number of sublevels.
    $xml_category = $xml->createElement( "category", $category );
    $xml_description = $xml->createElement( "description", $description );
    $xml_name = $xml->createElement( "name", $name );
    $xml_price = $xml->createElement( "price", $price );
    $xml_quantity = $xml->createElement( "quantity", $quantity );
    $xml_img = $xml->createElement( "img", $img );

    // Append the whole bunch.
    $xml_coffee->appendChild( $xml_category );
    $xml_coffee->appendChild( $xml_description );
    $xml_coffee->appendChild( $xml_name );
    $xml_coffee->appendChild( $xml_price );
    $xml_coffee->appendChild( $xml_quantity );
    $xml_coffee->appendChild( $xml_img );
    $xml->appendChild( $xml_coffee );

    $xml_shop->appendChild( $xml_coffee );
    $xml->appendChild( $xml_shop );

    $xml->save("data.xml");

    header("Location: store.php?submit=productadded");
    exit;

  } else {
  //  echo "Valid XML found... processing.";
    $xml = new DOMDocument( "1.0", 'UTF-8' );
    $xml->load('data.xml');
    $nodes = $xml->getElementsByTagName('shop') ;

    if ($nodes->length > 0) {
      //  $xml_shop = "shop";
      //  $xml_shop = $xml->createElement( "shop" );
      $xml_coffee = $xml->createElement( "coffee");

      //print_r($xml_coffee);

      // Call the input variables from the form and assign ocifetchstatement
      $category = $_POST['productcategory'];
      $description = $_POST['productdescription'];
      $name = $_POST['productname'];
      $price = $_POST['productprice'];
      $quantity = $_POST['productquantity'];
      $img = $_POST['fileToUpload'];

      // Create another element, just to show you can add any (realistic to computer) number of sublevels.
      $xml_category = $xml->createElement( "category", $category );
      $xml_description = $xml->createElement( "description", $description );
      $xml_name = $xml->createElement( "name", $name );
      $xml_price = $xml->createElement( "price", $price );
      $xml_quantity = $xml->createElement( "quantity", $quantity );
      $xml_img = $xml->createElement( "img", $img );

      // Append the whole bunch.
      $xml_coffee->appendChild( $xml_category );
      $xml_coffee->appendChild( $xml_description );
      $xml_coffee->appendChild( $xml_name );
      $xml_coffee->appendChild( $xml_price );
      $xml_coffee->appendChild( $xml_quantity );
      $xml_coffee->appendChild( $xml_img );
      $xml->appendChild( $xml_coffee );

      $nodes[0]->appendChild($xml_coffee);

      $xml->save("data.xml");

      header("Location: store.php?submit=productadded");
      exit;

    }

  }
} else {
  header("Location: store.php?submit=failed");
  exit;
}
