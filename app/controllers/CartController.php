<?php

namespace App\Controllers;

use Core\Response;

class CartController
{
  public function index()
  {
    Response::view('cartPage');
  }
}
