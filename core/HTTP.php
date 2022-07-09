<?php

namespace Core;

use Error;

class HTTP
{
  public static function parsePath(string $path)
  {
    // if ($path === '/') return $path;

    $exploded = explode('/', $path);

    if ($exploded[0] == '') unset($exploded[0]);

    if ($exploded[count($exploded)] == '') unset($exploded[count($exploded)]);

    foreach ($exploded as $index => $section) {
      if ($section == '') throw new Error('invalid route path.');

      if ($section[0] === ":") $exploded[$index] = ':';
    }

    return $exploded;
  }

  public static function originalUrl()
  {
    return $_SERVER['SCRIPT_NAME'];
  }

  public static function fullUrl()
  {
    return $_SERVER['REQUEST_URI'];
  }

  public static function method()
  {
    $method = strtoupper($_SERVER['REQUEST_METHOD']);

    if ($method === "POST" && $_POST['_method'])
      $method = strtoupper($_POST['_method']);
    return $method;
  }

  public static function host()
  {
    return $_SERVER['HTTP_HOST'];
  }

  public static function accept()
  {
    return explode(',', $_SERVER['HTTP_ACCEPT']);
  }

  public static function accepts(string $term)
  {
    $search = array_filter(self::accept(), fn ($a) => $a === $term);
    $count = count($search);

    return $count === 0 ? false : true;
  }

  public static function is($path)
  {
    return $path === self::originalUrl();
  }
}
