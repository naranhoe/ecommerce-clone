<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/core/init.php';
  include 'includes/head.php';
  include 'includes/navigation.php';

  $sql = "SELECT * FROM categories WHERE parent = 0";
  $result = $db->query($sql);
?>
<h2 class="text-center">Categories</h2><hr>
<div class="row">

  <!-- Form -->
  <div class="col-md-6">
    <legend>Add A Category</legend>
    <form class="form" action="categories.php" method="post">
      <div class="form-group">
        <label for="parent">Parent</label>
        <select class="form-control" name="parent" id='parent'>
          <option value="0">Parent</option>
          <?php while($parent = mysqli_fetch_assoc($result)): ?>
            <option value="<?php echo($parent['id']); ?>"><?php echo($parent['category']); ?></option>
          <?php endwhile; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="category">Category</label>
        <input type="text" class='form-control' id='category' name="category">
      </div>
      <div class="form-group">
        <input type="button" value="Add Category" class="btn btn-success">
      </div>
    </form>
  </div>
  <!-- Category Table -->
    <div class="col-md-6">
      <table class='table table-bordered'>
        <thead>
          <th>Categories</th><th>Parent</th><th></th>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM categories WHERE parent = 0";
            $result = $db->query($sql);
            while($parent = mysqli_fetch_assoc($result)):
              $parent_id = (int)$parent['id'];
              $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
              $child_result = $db->query($sql2);
          ?>
            <tr class="bg-primary">
              <td><?php echo($parent['category']); ?></td>
              <td>Parent</td>
              <td>
                <a href="categories.php?edit=<?php echo($parent['id']); ?>" class="btn btn-xs btn-default"><span class='glyphicon glyphicon-pencil'></span></a>
                <a href="categories.php?delete=<?php echo($parent['id']); ?>" class="btn btn-xs btn-default"><span class='glyphicon glyphicon-remove-sign'></span></a>
              </td>
            </tr>
            <?php while($child = mysqli_fetch_assoc($child_result)): ?>
              <tr class="bg-info">
                <td><?php echo($child['category']); ?></td>
                <td><?php echo($parent['category']); ?></td>
                <td>
                  <a href="categories.php?edit=<?php echo($child['id']); ?>" class="btn btn-xs btn-default"><span class='glyphicon glyphicon-pencil'></span></a>
                  <a href="categories.php?delete=<?php echo($child['id']); ?>" class="btn btn-xs btn-default"><span class='glyphicon glyphicon-remove-sign'></span></a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
