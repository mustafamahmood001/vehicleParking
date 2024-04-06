
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="assets/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="assets/css/datatables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="wrapper">
      <!-- Sidebar  -->
        <nav id="sidebar" style="color:aqua">
            <div class="sidebar-header">
            <img src="data:image/png;base64,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" alt="Parking Logo">

            </div>

            <ul class="list-unstyled components">
    <li>
        <a href="dashboard.php">Dashboard</a>
    </li>
    <li>
        <a href="vehicle-category.php">Vehicle Category</a>
    </li>
    <li>
        <a href="vehicle.php">Manage In Vehicle</a>
    </li>
    <li>
        <a href="manage-outgoingvehicle.php">Manage Out Vehicle</a>
    </li>
    <li>
        <a href="reports.php">Reports</a>
    </li>
    <li>
        <a href="settings.php">Settings</a>
    </li>
</ul>

        </nav>
        <div class="container-fluid p-0">
          <div class="content">
              <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-light">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                            <!-- <span>Toggle Sidebar</span> -->
                        </button>
                        <!-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button> -->
                        <div class="dropdown" style="padding:12px 0;">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, Admin
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="profile.php">My Profile</a>
                              <a class="dropdown-item logout" href="index.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </nav>
