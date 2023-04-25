<?php
require_once '../../server/dbcon.php';
$database = new dbcon();

?>
<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php' ?>

<body class="">
  <div class="wrapper ">
    <?php include '../includes/sidebar.php' ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php include '../includes/nav.php' ?>
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
                <form action="controller.php" method="post" enctype="multipart/form-data">
                  <?php
                  if (isset($_GET['product_id'])) {
                    $result = $database->childData($_GET['product_id']);
                    $_SESSION['product_id'] = $_GET['product_id'];
                  }
                  ?>
                  <div class="row">
                    <div clas="col-md-3 px-1">
                      <div class="form-group">
                        <label style="margin-left: 15px;">Product Name</label>
                        <input style="margin-left: 15px;" name="productName" type="text" class="form-control" placeholder="Name" value=<?php echo $result['product_en_name'] ?>>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label style="margin-left: 25px;" for="exampleInputEmail1">Product Description</label>
                        <input style="margin-left: 25px;" name="productDescription" type="text" class="form-control" placeholder="Description" value=<?php echo $result['product_en_description'] ?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Product Image</label>
                        <input name="productImage" type="file" class="form-control" placeholder="Image" value=<?php echo $result['product_image'] ?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Product Price</label>
                        <input name="productPrice" type="text" class="form-control" placeholder="Price" value="<?php echo $result['product_price'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Product Discount</label>
                        <input name="productDiscount" type="text" class="form-control" placeholder="Discount" value=<?php echo $result['product_discount'] ?>>
                        <input type="number" name="qty" hidden value=1 />
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="updateProductBtn" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include '../includes/footer.php' ?>

    </div>
  </div>
  <?php include '../includes/script.php' ?>
</body>

</html>