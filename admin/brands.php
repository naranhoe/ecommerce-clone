<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  // Get brands from database
  $sql = "SELECT * FROM brand ORDER BY brand";
  $results = $db->query($sql);
  $errors = array();

  // Edit Brand
  if (isset($_GET['edit']) && !empty($_GET['edit'])) {
    $edit_id = (int)$_GET['edit'];
    $edit_id = sanitize($edit_id);
    $sql2 = "SELECT * FROM brand WHERE id = '$edit_id'";
    $edit_result = $db->query($sql2);
    $eBrand = mysqli_fetch_assoc($edit_result);
  }

  // Delete brand
  if(isset($_GET['delete']) && !empty($_GET['delete'])) {
    $delete_id = (int)$_GET['delete'];
    $delete_id = sanitize($delete_id);
    $sql = "DELETE FROM brand WHERE id = '$delete_id'";
    $db->query($sql);
    // Redirect back to brands page
    header("Location: brands.php");
    echo "Deleted successfully!";
  }

  // If add form is submitted
  if (isset($_POST['add_submit'])) {
    $brand = sanitize($_POST['brand']);
    // Check is Brand is blank
    if ($_POST['brand'] == '') {
      $errors[] .= "Please enter a brand name!";
    }
    // Check if brand exists in database
    $sql = "SELECT * FROM brand WHERE brand = '$brand'";
    if (isset($_GET['edit'])) {
      $sql = "SELECT * FROM brand WHERE brand = '$brand' AND id != '$edit_id'";
    }
    $result = $db->query($sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
      $errors[] .= ucfirst($brand) . ' already exists. Please choose another brand name!';
    }

    // Display errors
    if (!empty($errors)) {
      echo display_errors($errors);
    }else{
      // Add brand to database
      $sql = "INSERT INTO brand (brand) VALUES ('$brand')";
      if (isset($_GET['edit'])) {
        $sql = "UPDATE brand SET brand = '$brand' WHERE id = '$edit_id'";
      }
      $db->query($sql);
      header("Location: brands.php");
      echo "Added successfully!";
    }
  }
?>
<h2 class="text-center">Brands</h2><hr>
<!-- Brand Form -->
<div class="text-center">
  <form class="form-inline" action="brands.php<?php echo((isset($_GET['edit']))?'?edit='.$edit_id:''); ?>" method="post">
    <div class="form-group">
      <?php if(isset($_GET['edit'])){
        $brand_value = $eBrand['brand'];

      }else{
        if (isset($_POST['brand'])) {
          $brand_value = sanitize($_POST['brand']);
        }
      } ?>
      <label for="brand"><?php echo((isset($_GET['edit']))?'Edit':'Add A'); ?> Brand:</label>
      <input type="text" name="brand" id="brand" class="form-control" value="<?php echo $brand_value; ?>">
      <?php if (isset($_GET['edit'])): ?>
        <a href="brands.php" class="btn btn-default">Cancel</a>
      <?php endif; ?>
      <input type="submit" name="add_submit" value="<?php echo((isset($_GET['edit']))?'Edit':'Add'); ?> Brand" class="btn btn-md btn-success">
    </div>
  </form>
</div><hr>

<table class="table table-bordered table-striped table-auto table-condensed">
  <thead>
    <th></th><th>Brand</th><th></th>
  </thead>
  <tbody>
    <?php while($brand = mysqli_fetch_assoc($results)) : ?>
      <tr>
        <td><a href="brands.php?edit=<?php echo $brand['id']; ?>" class='btn btn-xs btn-default'><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><?php echo $brand['brand']; ?></td>
        <td><a href="brands.php?delete=<?php echo $brand['id']; ?>" class='btn btn-xs btn-default'><span class="glyphicon glyphicon-remove-sign"></span></a></td>
      </tr>
  <?php endwhile; ?>
  </tbody>
</table>
<?php include 'includes/footer.php'; ?>
