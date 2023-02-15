<?php
require_once __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Storage;

class firebase {
  private const SERVICEACCOUNT = '/Applications/MAMP/htdocs/firebase_Assignemnt_php/phpassignment-75537-firebase-adminsdk-wf56r-f771d27684.json';
  private const DATABASEURL = 'https://phpassignment-75537-default-rtdb.firebaseio.com/';
  private const TABLE = 'product';
  protected $auth;
  protected $database;
  protected $factory;
  protected $storage;

  public function __construct(Storage $storage = null)
  {
    try{
      $this->factory = (new Factory)
      ->withServiceAccount(self::SERVICEACCOUNT)
      ->withDatabaseUri(self::DATABASEURL);
      $this->auth = $this->factory->createAuth();
      $this->database = $this->factory->createDatabase();
      $this->storage = $this->factory->createStorage();
      $this->storage = $storage;
    }catch(Exception $e){
      $_SESSION['dataStatus'] = "Error to conent firebase" . $e->getMessage();
    }
  }
  public function getReference($ref_table = self::TABLE){
    $reference = $this->database->getReference($ref_table);
    return $reference;
    
  }
}
?>
