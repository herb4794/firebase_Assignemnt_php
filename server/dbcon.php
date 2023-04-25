<?php
require_once '/xampp/htdocs/Assignment_2/config.php';
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
  public function deleteData(){
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
  public function verify($email = null, $pass = null){
    $verify_result = $this->auth->signInWithEmailAndPassword($email, $pass);
    return $verify_result;
  }
  public function getUserData(){
    $getUserData_result = $this->auth->listUsers();
    return $getUserData_result;
  }
  public function editUserData($uid = null){
    $getEditUserData = $this->auth->getUser($uid);
    return $getEditUserData;
  }
  public function updateUser($uid = null, $post_date = null){
    $getUpdateUser = $this->auth->updateUser($uid, $post_date);
    return $getUpdateUser;
  }
  public function deleteUser($uid = null){
    $getDeleteUser = $this->auth->deleteUser($uid);
    return $getDeleteUser;
  }
  public function updateProduct($post_data = null){
    $getUpdateProduct = $this->getReference()->update($post_data);
    return $getUpdateProduct;
  }

}

?>
