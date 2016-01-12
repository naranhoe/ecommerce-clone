<?php
  require_once '../core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';
  // Get brands from database
  $sql = "SELECT * FROM brand ORDER BY brand";
  $results = $db->query($sql);
  $errors = array();

  // Delete brand
  if(isset($_GET['delete']) && !empty($_GET['delete'])) {
    $delete_id = (int)$_GET['delete'];
    $delete_id = sanitize($delete_id);
    $sql = "DELETE FROM brand WHERE id = '$delete_id'";
    $db->query($sql);
    // Redirect back to brands page
    header("Location: https://www.google.com");
    echo "Deleted successfully!";
    exit();
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
    $result = $db->query($sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
      $errors[] .= ucfirst($brand) . ' already exists. Please choose another brand name!';
    }

    // Display errors
    if (!empty($errors)) {
      echo display_erros($errors);
    }else{
      // Add brand to database
      $sql = "INSERT INTO brand (brand) VALUES ('$brand')";
      $db->query($sql);
      header("Location: https://www.google.com");
      echo "Added successfully!";
      exit();
    }
  }
?>
<h2 class="text-center">Brands</h2><hr>
<!-- Brand Form -->
<div class="text-center">
  <form class="form-inline" action="brands.php" method="post">
    <div class="form-group">
      <label for="brand">Add A Brand:</label>
      <input type="text" name="brand" id="brand" class="form-control" value="<?php echo $_POST['brand']; ?>">
      <input type="submit" name="add_submit" value="Add Brand" class="btn btn-md btn-success">
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
