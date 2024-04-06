
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parking</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div id="admin-content" class="mt-5">
  <div class="message"></div>
    <div class="container">
      <div class="row">
        <div class="offset-md-3 col-md-6">
          <div class="login-form">
            <div class="card">
              <div class="card-header p-2" style="background:#D85C27;">
                <h2 class="text-center text-white m-2">Parking</h2>
              </div>
              <div class="card-body login-form position-relative">
                <!-- <div class="loader-container">
                  <div class="loader"></div>
                </div> -->
                <form id="admin_Login" action="" method="POST" autocomplete="off">
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control username" name="username" id="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control password" name="password" id="password" placeholder="Password" required>
                  </div>
                  <a href="dashboard.php" class="btn text-white w-100" style="background:#D85C27; display: block; text-decoration: none;">Login</a>
                  <h1>Click 'Login' to be redirected to the dashboard.</h1>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.js" charset="utf-8"></script>
  <script src="assets/js/admin.js" charset="utf-8"></script>
</body>
</html>





