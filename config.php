<?php
require_once __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

class firebase {
  private const SERVICEACCOUNT = '/xampp/htdocs/Assignment_2/phpassignment-75537-firebase-adminsdk-wf56r-f771d27684.json';
  private const DATABASEURL = 'https://phpassignment-75537-default-rtdb.firebaseio.com/';
  public $table;
  public $auth;
  protected $database;
  protected $factory;

  public function __construct($table = "product")
  {
    $this->table = $table;
    try{
      $this->factory = (new Factory)
      ->withServiceAccount(self::SERVICEACCOUNT)
      ->withDatabaseUri(self::DATABASEURL);
      $this->auth = $this->factory->createAuth();
      $this->database = $this->factory->createDatabase();
    }catch(Exception $e){
      $_SESSION['dataStatus'] = "Error to conent firebase" . $e->getMessage();
    }
  }
  public function getReference(){
    $reference = $this->database->getReference($this->table);
    return $reference;
    }
}
?>
