<?php

namespace Core;

use \Doctrine\Inflector\InflectorFactory;

class Model
{
  private static $_query = '';

  protected $exclude = [];

  private static function getInstance()
  {
    return new self;
  }

  private static function wrapInParentheses($data)
  {
    return "(" . $data . ")";
  }

  public static function generatedQuery()
  {
    return static::$_query;
  }

  protected static function tableName()
  {
    $inflector = InflectorFactory::create()->build();

    $name = explode("\\", static::class);
    $name = $name[count($name) - 1];

    $tableize = $inflector->tableize($name);

    return $inflector->pluralize(strtolower($tableize));

    // $inflector->classify('model_name');
    // $inflector->camelize('model_name');
    // $inflector->singularize('browsers');
    // $inflector->urlize('My first blog post');
  }

  public static function where($collomn, $type, $value)
  {
    if (
      str_contains(static::$_query, 'WHERE')
    ) {
      static::$_query = static::$_query . "AND {$collomn}{$type}'{$value}' ";
    } else {
      static::$_query = static::$_query . "WHERE {$collomn}{$type}'{$value}' ";
    }

    return new static;
  }

  public static function or($collomn, $type, $value)
  {
    if (
      str_contains(static::$_query, 'WHERE')
    ) {
      static::$_query = static::$_query . "OR {$collomn}{$type}'{$value}' ";
    } else {
      die('SQL syntax error in OR');
    }

    return new static;
  }

  public static function all()
  {
    $connection = new DatabaseConnection();

    $tableName = static::tableName();

    $fullQuery = "SELECT * FROM {$tableName} " . static::$_query;;
    return $connection->fetchAll($fullQuery, static::class);
  }

  public static function first()
  {
    $connection = new DatabaseConnection();

    $tableName = static::tableName();

    $fullQuery = "SELECT * FROM {$tableName} " . static::$_query;;
    return $connection->fetch($fullQuery, static::class);
  }

  public static function getByPK($pk)
  {
    $connection = new DatabaseConnection();

    $tableName = static::tableName();

    // getting by pk
  }

  public static function create($data)
  {
    $connection = new DatabaseConnection();

    $collomnNames = '';
    $collomnValues = '';

    foreach ($data as $key => $value) {
      $collomnNames = $collomnNames . $key . ',';
      $collomnValues = $collomnValues . "'" . $value . "'" . ',';
    }

    $query = 'INSERT INTO '
      . static::tableName()
      . ' '
      . static::wrapInParentheses($collomnNames)
      . ' VALUES '
      . static::wrapInParentheses($collomnValues);

    static::$_query = str_replace(',)', ')', $query);

    return $connection->execute(static::$_query, static::class);
  }
}
