<?php

  $products = array();
  $AllProducts = file_get_contents("products.txt");
  $AllProducts = explode(";\n", $AllProducts);

  foreach ($AllProducts as $ProductData)
  {
    list($ProductsTitle, $ProductsPrice) = explode(",", $ProductData);
      $products[$ProductsTitle] = $ProductsPrice;
  }

  return $products;
  ?>
