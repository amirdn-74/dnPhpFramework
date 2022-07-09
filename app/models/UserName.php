<?php

namespace App\Models;

use Core\Model;

class UserName extends Model
{
  public function sayHi()
  {
    return 'Hello and welcome: ' . $this->name;
  }
}
