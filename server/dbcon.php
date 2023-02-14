<?php
require_once '../../config.php';
class dbcon extends firebase {

  public function getData(){
    $postRef_result = $this->getReference()->getValue();
    return $postRef_result;
  }
  public function countData(){
    $count_result = $this->getReference();
    return $count_result;
  }
  public function update($post_data = null) {
    $update_result = $this->getReference()->update($post_data);
    return $update_result;
  }
  public function delete(){
    $delete_result = $this->getReference()->remove();
    return $delete_result;
  }
  public function authentication($post_data = null){
    $authentication_result = $this->auth->createUser($post_data);
    return $authentication_result;
  }
  public function insertData($post_date = null){
    $insertData_result = $this->getReference()->push($post_date);
    return $insertData_result;
  }
  public function childData($post_date = null){
    $childData_result = $this->getReference()->getChild($post_date)->getValue();
    return $childData_result;
  }
}

?>
