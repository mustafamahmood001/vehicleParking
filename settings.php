<?php $title = "Settings";
include "header.php" ?>
  <div class="message"></div>
  <div class="container">
    <div class="admin-content">
      <div class="card">
        <div class="card-header">
          <h2 class="d-inline">Edit Settings</h2>
        </div>
        <div class="card-body position-relative">
        <form class="yourform" id="update-settings" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Site Name</label>
        <input type="hidden" name="site_id" value="Parking">
        <input type="text" class="form-control site_name" placeholder="" name="site_name" value="Parking" required>
    </div>
    <div class="form-group">
        <label>Site Logo</label>
        <input type="file" class="new_logo image" name="new_logo" />
        <input type="hidden" class="old_logo image" name="old_logo" value="example_logo.jpg">
        <img id="image" src="images/site-logo/example_logo.jpg" alt="" width="100px"/>
    </div>
    <div class="form-group">
        <label>Currency Format</label>
        <input type="text" class="form-control site_currency" placeholder="" name="site_currency" value="" required>
    </div>
    <input type="submit" name="save" class="btn btn-dark float-right" value="Update" required>
</form>

        </div>
      </div>
    </div>
  </div>

<?php include "footer.php" ?>
