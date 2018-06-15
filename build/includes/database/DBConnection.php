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
  protected $DB = null;

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

      $this->DB = new PDO($dsn, $this->username, $this->password);
      $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$this->pdo = $pdo;

    //ChromePhp::log("Connection successful to: " . $databaseName);

      return $this->DB;

    } catch (PDOException $e) {
      //ChromePhp::log("Connection failed: " . $e->getMessage());
      print $e->getMessage();
    }
  }

  public function query($query)
        {
        return $this->DB->query($query);
        }

          public function prepare($query)
        {
        return $this->DB->prepare($query);
        }

        public function execute()
        {
        return $this->DB->execute();
        }

        public function fetch()
        {
        return $this->DB->fetch((PDO::FETCH_ASSOC));
        }
}
?>
