  <div class="container">
   <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
         <h4>
            Add Contacts
            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
         </h4> 
        </div>
        <div class="card-body">
          <form action="../../server/insertProduct.php" method="POST">
            <div class="form-group mb-3">
              <label for="">Prodcut Name</label>
              <input type="text" name="product_name" class="form-control">
            </div>

            <div class="form-group mb-3">
              <label for="">Product Description</label>
              <input type="text" name="product_description" class="form-control">
            </div>

            <div class="form-group mb-3">
              <label for="">Product Price</label>
              <input type="text" name="product_price" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="">Product Image</label>
              <input type="text" name="product_image" class="form-control">
            </div>

            <div class="form-group mb-3">
              <label for="">Product Discount</label>
              <input type="text" name="product_discount" class="form-control">
            </div>
            
            <div class="form-group mb-3">
              <button type="submit" name="save-product" class="btn btn-primary">Add</button>
            </div>
          </form>
        </div>
     </div>
    </div>
   </div> 
  </div>
