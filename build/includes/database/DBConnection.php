<?php

/**
* Creates a connection to the database and returns the data object.
*
* @return PDO A data object representing a connection to the database.
*/
require 'DBCredentials.php';

class DBConnection{

  private $hostname;
  private $username;
  private $password;
  private $charset;
  private $databaseName;

  public function __construct(){
    $this->hostname = DB_HOST;
    $this->username = DB_USER;
    $this->password = DB_PASSWORD;
    $this->charset = DB_CHARSET;
    //$this->connect($databaseName);
  }

  public function connect($databaseName) {

    $this->databaseName = $databaseName;

    try {
      $dsn = 'mysql:dbname=' . $this->databaseName . ';host=' .
      $this->hostname . ';charset=' . $this->charset;

      $pdo = new PDO($dsn, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$this->pdo = $pdo;

    //ChromePhp::log("Connection successful to: " . $databaseName);

      return $pdo;

    } catch (PDOException $e) {
      ChromePhp::log("Connection failed: " . $e->getMessage());
    }
  }
}
?>
