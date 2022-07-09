<?php

use Core\HTTP;

function routeIs($path)
{
  return $path === HTTP::originalUrl();
}

function routeContains($path)
{
  return str_contains(HTTP::originalUrl(), $path);
}

function routeStartsWith($path)
{
  return str_starts_with(HTTP::originalUrl(), $path);
}
