<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product List</title>
  <?php include "parts/meta.php"; ?>


  <script src="lib/js/functions.js"></script>
  <script src="js/templates.js"></script>
  <script src="js/product_list.js"></script>

</head>
<body>

  <?php include "parts/navbar.php"; ?>


  <div class="container">
    <div class="card soft">
      <h2>Product List</h2>




      <div class="form-control">
        <form class="hotdog light" id="product-search">
          <input type="search" placeholder="Search Products">          
        </form>
      </div>
      <div class="form-control">
        <div class="card soft"> 
        <div class="display-flex">
          <div class="flex-stretch display-flex">
            <div class="flex-none">
              <button data-filter="category" data-value="necklace" type="button" class="form-button">necklace</button>         
            </div> 
            <div class="flex-none">
              <button data-filter="category" data-value="earrings" type="button" class="form-button">earrings</button>         
            </div>
            <div class="flex-none">
              <button data-filter="category" data-value="bracelet" type="button" class="form-button">bracelet</button>         
            </div>
            <div class="flex-none">
              <button data-filter="category" data-value="ring" type="button" class="form-button">ring</button>         
            </div>
          </div>
          <div class="flex-none">
            <div class="form-select">
              <select class="js-sort">
                <option value="1">Newset</option>
                <option value="2">Oldset</option>
                <option value="3">Least Expensive</option>
                <option value="4">Most Expensive</option>      
              </select>
            </div>
          </div>
        </div>
        </div>
      </div>
     
      <div class='productlist grid gap'></div>      
  </div>
  
</body>
</html>