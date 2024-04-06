<?php $title = "Vehicle";
include "header.php" ?>
  <div class="message"></div>
  <div class="container">
    <div class="admin-content">
      <div class="card">
        <div class="card-header">
          <h2 class="d-inline">Vehicle List</h2>
          <a href="add-vehicle.php" class="btn btn-dark float-right">Add New Vehicle</a>
        </div>
        <div class="card-body position-relative">
          <div id="table-data">
          <table class="table-data table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>S.No</th>
            <th>Parking No.</th>
            <th>Owner Name</th>
            <th>Vehicle Reg Number</th>
            <th>Vehicle InTime</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>00132</td>
            <td>101</td>
            <td>Aslam Ali</td>
            <td>ABC 123</td>
            <td>5 Apr, 2024<br><small>10:30:00 AM</small></td>
            <td><span class="badge badge-info">Vehicle In</span></td>
            <td>
                <ul class="action-list">
                    <li><a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a></li>
                    <li><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>00324</td>
            <td>102</td>
            <td>Jameel Ansari</td>
            <td>XYZ 456</td>
            <td>5 Apr, 2024<br><small>11:45:00 AM</small></td>
            <td><span class="badge badge-info">Vehicle In</span></td>
            <td>
                <ul class="action-list">
                    <li><a href="view-vehicle.php?veid=2" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a></li>
                    <li><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a></li>
                </ul>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>


          </div>
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php" ?>
