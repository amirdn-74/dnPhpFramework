<?php

namespace App\Controllers;

use App\Models\UserName;
use Core\Response;

class HomeController
{
  public function index()
  {
    // Response::view('homePage', [
    //   'name' => 'amir'
    // ]);

    // $cn = UserName::all();

    $cn = UserName::create([
      'name' => 'ali',
      'email' => 'ali@gmail.com',
    ]);

    pre($cn);
    // foreach ($cn as $c) {
    //   pre($c->sayHi());
    // }
  }
}
