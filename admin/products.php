<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/core/init.php";
  include "includes/head.php";
  include "includes/navigation.php";

  $sql = "SELECT * FROM products WHERE deleted = 0";
  $presults = $db->query($sql);
  if (isset($_GET['featured'])) {
    $id = (int)$_GET['id'];
    $featured = (int)$_GET['featured'];
    $featured_sql = "UPDATE products SET featured = '$featured' WHERE id = '$id'";
    $db->query($featured_sql);
    header('Location: products.php');
  }

  // $sql2 = "SELECT * FROM categories WHERE category = ''";
 ?>

 <h2 class="text-center">Products</h2><hr>
 <table class="table table-bordered table-condensed table-striped">
   <thead><th></th><th>Products</th><th>Price</th><th>Category</th><th>Feature</th><th>Sold</th></thead>
   <tbody>
     <?php while($product = mysqli_fetch_assoc($presults)):
        $childID = $product['categories'];
        $catsql = "SELECT * FROM categories WHERE id = '$childID'";
        $result = $db->query($catsql);
     ?>
       <tr>
         <td>
           <a href="products.php?edit=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
           <a href="products.php?delete=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
         </td>
         <td><?php echo $product['title']; ?></td>
         <td><?php echo money($product['price']); ?></td>
         <td></td>
         <td><a href="products.php?featured=<?php echo (($product['featured'] == 0)?'1':'0'); ?>&id=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-<?php echo (($product['featured'] == 1)?'minus':'plus'); ?>"></span></a><?php echo (($product['featured']==1)?' Featured Product':''); ?></td>
         <td>0</td>
       </tr>
     <?php endwhile; ?>
   </tbody>
 </table>

 <?php include "includes/footer.php"; ?>
