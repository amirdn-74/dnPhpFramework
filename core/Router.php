<?php

namespace Core;

class Router
{
  private function handleRequest($handler, $params)
  {
    $controller = new $handler[0]();

    $method = $handler[1];

    $params = is_array($params) ? $params : [];

    $controller->$method(...$params);

    die();
  }

  private function checkPath($routePathSections)
  {
    $requestPathSections = HTTP::parsePath(HTTP::originalUrl());

    // if ($routePathSections === '/' && $routePathSections === $requestPathSections) return true;

    if (count($requestPathSections) !== count($routePathSections)) return false;

    $res = true;
    $params = [];

    foreach ($routePathSections as $index => $sec) {
      $res = true;

      if ($sec === ":") {
        $params[] = $requestPathSections[$index];
        if (strlen($requestPathSections[$index]) === 0) {
          $res = false;
          break;
        }
      }

      if ($sec !== ":" && $sec !== $requestPathSections[$index]) {
        $res = false;
        break;
      }
    }

    if ($res === false) return false;

    return $params ? $params : true;
  }

  public function get(string $path, $handler)
  {
    if (HTTP::method() !== 'GET') return;

    $params = $this->checkPath(HTTP::parsePath($path));

    if ($params) $this->handleRequest($handler, $params);
  }

  public function post(string $path, $handler)
  {
    if (HTTP::method() !== 'POST') return;

    $params = $this->checkPath(HTTP::parsePath($path));

    if ($params) $this->handleRequest($handler, $params);
  }

  public function put(string $path, $handler)
  {
    if (HTTP::method() !== 'PUT') return;

    $params = $this->checkPath(HTTP::parsePath($path));

    if ($params) $this->handleRequest($handler, $params);
  }

  public function patch(string $path, $handler)
  {
    if (HTTP::method() !== 'PATCH') return;

    $params = $this->checkPath(HTTP::parsePath($path));

    if ($params) $this->handleRequest($handler, $params);
  }

  public function delete(string $path, $handler)
  {
    if (HTTP::method() !== 'DELETE') return;

    $params = $this->checkPath(HTTP::parsePath($path));

    if ($params) $this->handleRequest($handler, $params);
  }
}
