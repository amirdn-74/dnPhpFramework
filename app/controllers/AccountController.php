<?php

namespace App\Controllers;

use Core\Response;

class AccountController
{
  public function login()
  {
    Response::view('account/loginPage');
  }

  public function register()
  {
    Response::view('account/registerPage');
  }

  public function createUser()
  {
    return Response::redirect('/');
  }
}
