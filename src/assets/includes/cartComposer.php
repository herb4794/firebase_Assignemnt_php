<?php
function cartComponent($product_name, $product_discount, $product_id){

  $cartComponentElement = 
"
<form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
<div class=\"border rounded\">
  <div class=\"row bg-white\">
    <div class=\"col-md-3 pl-0\">
      <img src=\"../assets/images/products/product_1.jpg\" alt=\"Image1\" class=\"img-fluid\">
    </div>
    <div class=\"col-md-6\">
      <h5 class=\"pt-2\">$product_name</h5>
      <h5 class=\"pt-2\">$$product_discount</h5>
      <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
      <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
    </div>
    <div class=\"col-md-3 py-5\">
      <div>
      </div>
    </div>
  </div>
</div>
</form>

";

echo $cartComponentElement;
}
?>
