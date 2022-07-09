<?php

namespace Core;

use PDO;
use PDOException;

class DatabaseConnection
{
  private $_database;
  private $_username;
  private $_password;

  private $_connection;

  public function __construct()
  {
    $this->_database = $_ENV['MYSQL_DATABASE'];
    $this->_username = $_ENV['MYSQL_USERNAME'];
    $this->_password = $_ENV['MYSQL_PASSWORD'];

    return $this->createConnection();
  }

  public function fetchAll($query, $targetModel)
  {
    $q = $this->_connection->query($query);
    $q->setFetchMode(PDO::FETCH_CLASS, $targetModel);

    return $q->fetchAll();
  }

  public function fetch($query, $targetModel)
  {
    $q = $this->_connection->query($query);
    $q->setFetchMode(PDO::FETCH_CLASS, $targetModel);

    return $q->fetch();
  }

  public function execute($query, $targetModel)
  {
    $q = $this->_connection->prepare($query);
    $q->setFetchMode(PDO::FETCH_CLASS, $targetModel);

    return $q->execute();
  }

  private function createConnection()
  {
    try {
      $this->_connection = new PDO(
        "mysql:host=127.0.0.1;dbname={$this->_database}",
        $this->_username,
        $this->_password
      );

      return $this->_connection;
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
