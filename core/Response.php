<?php

namespace Core;

use Exception;

class Response
{
  public static function set($header, $value)
  {
    header("{$header}:{$value}");
    return new static;
  }

  public static function json($res)
  {
    self::set('content-type', 'application/json');
    print_r(json_encode($res));
  }

  public static function view($view, $data = [])
  {
    if ($data) {
      foreach ($data as $key => $value) {
        $$key = $value;
      }
    }

    try {
      require_once __DIR__ . "/../app/views/{$view}.php";
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public static function send($data)
  {
    print_r($data);
  }

  public static function redirect($path)
  {
    self::set('location', $path);
  }
}
