<?php
require_once '../../server/dbcon.php';
$database = new dbcon();
$userResult = $database->getUserData();
$totalUser = 0;
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                        <?php
                          if (isset($_SESSION['totalUser'])) {
                            echo $_SESSION['totalUser'];
                          }else{
                            echo 0;
                          } 
                        ?>
                      </th>
                      <th>
                        email
                      </th>
                      <th>
                        phone
                      </th>
                      <th class="text-right">
                        type
                      </th>
                      <th class="text-right">
                        action
                      </th>
                    </thead>
                    <tbody>
                     <?php foreach ($userResult as $key => $value) {
                        $resultObj = get_object_vars($value);
                        $userArrayData = ['userData' => $resultObj];
                        $totalUser = $totalUser + count($userArrayData);
                        $_SESSION['totalUser'] = $totalUser;
                      ?>
                      <tr>
                        <td>
                          <?php echo $value->displayName?>
                        </td>
                        <td>
                          <?php echo $value->email?>
                        </td>
                        <td>
                          <?php echo $value->phoneNumber?>
                        </td>
                        <td class="text-right">
                          <?php
                           if($value->customClaims['admin'] == true && $value->customClaims['admin'] != false){
                             echo "admin";
                           }
                           if($value->customClaims['admin'] == false && $value->customClaims['admin'] != true)
                             echo "user";
                          ?>
                        </td>
                        <td class="text-right">
                           <a href="user.php?user_id=<?php echo $value->uid ?>" class="btn btn-sm btn-info">Edit</a>
                           <button type="button" id="Delete_Btn" value=<?php echo $value->uid ?> class="btn btn-sm btn-danger
                            deletebtn">Delete</button>
                        </td>
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
