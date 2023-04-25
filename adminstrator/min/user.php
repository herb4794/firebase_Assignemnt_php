<?php
require_once '../../server/dbcon.php';
$database = new dbcon();

?>
<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'?>
<body class="">
  <div class="wrapper ">
<?php include '../includes/sidebar.php'?>
       <div class="main-panel" id="main-panel">
      <!-- Navbar -->
<?php include '../includes/nav.php'?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form action="controller.php" method="post">
                  <?php
                    if (isset($_GET['user_id'])) {
                      $result = $database->editUserData($_GET['user_id']);
                      $resultData = get_object_vars($result);
                      $_SESSION['uid'] = $_GET['user_id'];
                    }
                  ?>
                  <div class="row">
                    <div clas="col-md-3 px-1">
                      <div class="form-group">
                        <label style="margin-left: 15px;">Username</label>
                        <input style="margin-left: 15px;" name="updateName" type="text" class="form-control" placeholder="Username" value=<?php echo $resultData['displayName']?>>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label style="margin-left: 25px;" for="exampleInputEmail1">Email address</label>
                        <input style="margin-left: 25px;" name="updateEmail" type="email" class="form-control" placeholder="Email" value=<?php echo $resultData['email']?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                       <input name="updatePhoneNumber" type="text" class="form-control" placeholder="Phone Number" value=<?php echo $resultData['phoneNumber']?> maxlength="8">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input name="updateAddress" type="text" class="form-control" placeholder="Home Address" value="<?php echo $resultData['customClaims']['address'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Resigter Date</label>
                        <input disabled type="text" class="form-control" placeholder="Resigter Date" value=<?php $json = json_encode($resultData['tokensValidAfterTime']); $obj = json_decode($json);  echo $obj->{'date'}?>>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>User Type</label>
                        <input disabled class="form-control" placeholder="admin/user" value=<?php if ($resultData['customClaims']['admin'] == true && $resultData['customClaims']['admin'] != false ) {
                          echo "admin";
                        } if ($resultData['customClaims']['admin'] == false && $resultData['customClaims']['admin'] != true) {
                          echo "user";
                        }?>>
                      </div>
                    </div>
                  </div>
                  <!--<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea name="about" rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike"></textarea>
                      </div>
                    </div>
                  </div>--!>
                    <div class="modal-footer">
                      <button type="submit" name="userUpdateBtn" class="btn btn-primary">Update</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src=<?php echo $resultData['photoUrl']?> alt="...">
                    <h5 class="title"><?php echo $resultData['displayName']?></h5>
                  </a>
                  <p class="description">
                   Memento Mori 
                  </p>
                </div>
                <p class="description text-center">
                  "Unterm Wiben Baume sitzend,Horst
                                                  <br>
                   Horst du fern die Winde schrillen,
                   Siehst, wie oben stumme Wolken
                   Sich in Nebeldecken hullen;"<br>
                  
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include '../includes/footer.php'?>

    </div>
  </div>
<?php include '../includes/script.php'?>
</body>

</html>
