<?php $title = "Profile";
include "header.php" ?>
  <div class="message"></div>
  <div class="container">
    <div class="admin-content">
      <div class="card">
        <div class="card-header">
          <h2 class="d-inline">Edit Profile</h2>
        </div>
        <div class="card-body position-relative">
        <form class="yourform" id="update-profile" action="#" method="post" autocomplete="off">
    <div class="form-group">
        <label>Name</label>
        <input type="hidden" name="admin_id" value="admin">
        <input type="text" class="form-control name" name="name" value="Admin" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control email" name="email" value="admin@example.com" required>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="tel" class="form-control phone" name="phone" value="1234567890" required>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control address" name="address" value="123 Main St, City" required>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control username" name="username" value="admin" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="new_password" value="">
        <input type="hidden" class="form-control" placeholder="" value="fakepassword123" name="old_password" required>
        <small>( Leave password empty if not changing password. )</small>
    </div>
    <input type="submit" name="save" class="btn btn-dark float-right" value="Update" required>
</form>
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php" ?>
