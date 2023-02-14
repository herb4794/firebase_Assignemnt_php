<?php
require_once __DIR__ . '../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
class firebase {
  private const SERVICEACCOUNT = "phpassignment-75537-firebase-adminsdk-wf56r-f771d27684.json";
  private const DATABASEURL = "https://phpassignment-75537-default-rtdb.firebaseio.com/";

  protected $auth;
  protected $database;
  protected $factory;
  protected $contact = "contact";

  public function __construct()
  {
    try{
      $this->factory = (new Factory)
      ->withServiceAccount(self::SERVICEACCOUNT)
      ->withDatabaseUri(self::DATABASEURL);
      $this->auth = $this->factory->createAuth();
      $this->database = $this->factory->createDatabase();
    }catch(Exception $e){
      S_SESSION['dataStatus'] = "Error to conent firebase" . $e->getMessage();
    }
  }

  public function getReference($ref_table = $this->contact){
    $reference = $this->database->getReference($ref_table);
    return $reference;
    
  }
}
?>
