<?php

namespace App\Controllers;

use Core\Response;

class ProductsController
{
  public function index()
  {
    Response::view('productsPage');
  }

  public function show($id)
  {
    Response::view('showProductPage', [
      'productId' => $id
    ]);
  }
}
