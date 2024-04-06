<?php $title = "Vehicle Category";
include "header.php" ?>
  <div class="message"></div>
  <div class="container">
    <div class="admin-content">
      <div class="card">
        <div class="card-header">
          <h2 class="d-inline">Vehicle Category List</h2>
          <a href="add-vehicle-category.php" class="btn btn-dark float-right">Add New Category</a>
        </div>
        <div class="card-body position-relative">
          <div id="table-data">
          <table class="table-data table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>S.No</th>
            <th>Category Name</th>
            <th>Parking Charges</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Category A</td>
            <td>100</td>
            <td><span class="badge badge-success">Active</span></td>
            <td>
            <ul class="action-list">
                    <li><a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a></li>
                    <li><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Category B</td>
            <td>150</td>
            <td><span class="badge badge-danger">Inactive</span></td>
            <td>
            <ul class="action-list">
                    <li><a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a></li>
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
