<?php
require_once '../../server/dbcon.php';

$database = new dbcon();
$productResult = $database->getData();
$totalProduct = 0;
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <form action="controller.php" method="post">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Product Name
                        </th>
                        <th>
                          Discription
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Discount
                        </th>
                        <th class="text-right">
                          action
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach ($productResult as $key => $value) {
                          $totalProduct = $totalProduct + count($productResult);
                          $_SESSION['totalProduct'] = $totalProduct;
                          //這個Session是計了有幾多個product的數 想顯視現在有幾多個product 就用佢
                        ?>
                          <tr>
                            <td>
                              <?php echo $value['product_en_name'] ?>
                            </td>
                            <td>
                              <?php echo $value['product_en_description'] ?>
                            </td>
                            <td>
                              <img class="img-thumbnail" src=<?php echo $value['product_image'] ?> alt="">
                            </td>
                            <td>
                              <?php echo $value['product_price'] ?>
                            </td>
                            <td>
                              <?php echo $value['product_discount'] ?>
                            </td>
                            <td class="text-right">
                              <a href="updateProduct.php?product_id=<?php echo $key ?>" name="updateProductBtn" class="btn btn-sm btn-info">Update</a>
                              <button type="submit" name="deleteProductBtn" value=<?php echo $key ?> class="btn btn-sm btn-danger
                            deletebtn">Delete</button>
                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
            </div>
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