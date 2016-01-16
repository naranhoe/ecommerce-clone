  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/core/init.php";
    include "includes/head.php";
    include "includes/navigation.php";
    if (isset($_GET['add'])) {
  ?>
    <h2 class="text-center">Add A New Product</h2><hr>
    <form class="" action="products.php?add=1" method="post"  enctype="multipart/form-data">
      <div class="form-group col-md-3">
        <label for="title">Title*:</label>
        <input type="type" name="title" id="title" value="<?php echo ((isset($_POST['title']))?sanitize($_POST['title']):'') ?>">

      </div>
    </form>
  <?php }else{

  $sql = "SELECT * FROM products WHERE deleted = 0";
  $presults = $db->query($sql);
  if (isset($_GET['featured'])) {
    $id = (int)$_GET['id'];
    $featured = (int)$_GET['featured'];
    $featured_sql = "UPDATE products SET featured = '$featured' WHERE id = '$id'";
    $db->query($featured_sql);
    header('Location: products.php');
  }
 ?>

 <h2 class="text-center">Products</h2>
 <a href="products.php?add=1" class="btn btn-success pull-right" id="add-product-btn">Add Product</a><div class="clearfix"></div>
 <hr>
 <table class="table table-bordered table-condensed table-striped">
   <thead><th></th><th>Products</th><th>Price</th><th>Category</th><th>Feature</th><th>Sold</th></thead>
   <tbody>
     <?php while($product = mysqli_fetch_assoc($presults)):
        $childID = $product['categories'];
        $catsql = "SELECT * FROM categories WHERE id = '$childID'";
        $result = $db->query($catsql);

        $child = mysqli_fetch_assoc($result);
        $parentID = $child['parent'];
        $parentsql = "SELECT * FROM categories WHERE id = '$parentID'";
        $presult = $db->query($parentsql);
        $parent = mysqli_fetch_assoc($presult);
        $category = $parent['category'].'~'.$child['category'];
     ?>
       <tr>
         <td>
           <a href="products.php?edit=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
           <a href="products.php?delete=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
         </td>
         <td><?php echo $product['title']; ?></td>
         <td><?php echo money($product['price']); ?></td>
         <td><?php echo $category; ?></td>
         <td><a href="products.php?featured=<?php echo (($product['featured'] == 0)?'1':'0'); ?>&id=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-<?php echo (($product['featured'] == 1)?'minus':'plus'); ?>"></span></a><?php echo (($product['featured']==1)?' Featured Product':''); ?></td>
         <td>0</td>
       </tr>
     <?php endwhile; ?>
   </tbody>
 </table>

 <?php } include "includes/footer.php"; ?>
