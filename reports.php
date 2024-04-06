<?php $title = "Reports";
include "header.php" ?>
  <div class="message"></div>
  <div class="container">
    <div class="admin-content">
        <div class="card">
            <div class="card-header">
                <h2 class="d-inline">Reports</h2>
            </div>
            <div class="card-body position-relative">
                <div id="table-data">
                    <form id="search-form" class="form-horizontal row" type="POST">
                        <div class="col-12 col-md-6 form-group">
                            <label for="">From Date</label>
                            <input type="datetime-local" name="from_date" class="form-control" value="">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="">To Date</label>
                            <input type="datetime-local" name="to_date" class="form-control" value="">
                        </div>
                        <div class="col-12 col-md-4 form-group">
                            <label for="">Type</label>
                            <select name="search_type" class="form-control">
    <option value="all" selected>All Records</option>
    <option value="incoming">Incoming Vehicle</option>
    <option value="outgoing">Outgoing Vehicle</option>
    <option value="vehicle_number">Search Vehicle Number</option>
    <option value="user_name">Search User Name</option>
    <option value="phone_number">Search Phone Number</option>
</select>

                        </div>
                        <div class="col-12 col-md-4 form-group vehicle_number">
                            <label for="">Vehicle Number</label>
                            <input type="text" class="form-control" name="vehicle_number" placeholder="Enter Vehicle Number">
                        </div>
                        <div class="col-12 col-md-4 form-group user_name">
                            <label for="">User Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="Enter User Name">
                        </div>
                        <div class="col-12 col-md-4 form-group phone_number">
                            <label for="">Phone Number</label>
                            <input type="number" class="form-control" name="phone_number" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-12 col-md-12 form-group">
                            <input type="submit" class="btn btn-dark btn-sm" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
    <div class="card">
        <div class="card-body position-relative">
        <table id="reportData" class='table table-bordered w-100'>
    <thead class="thead-dark">
        <tr>
            <th>Parking Number</th>
            <th>Owner Name</th>
            <th>Vehicle Reg Number</th>
            <th>Vehicle DateTime</th>
            <th>Status</th>
            <th>Parking Charge</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>101</td>
            <td>John Doe</td>
            <td>ABC 123</td>
            <td>2024-04-05 10:30:00</td>
            <td>Active</td>
            <td>$10</td>
        </tr>
        <tr>
            <td>102</td>
            <td>Jane Smith</td>
            <td>XYZ 456</td>
            <td>2024-04-05 11:45:00</td>
            <td>Inactive</td>
            <td>$15</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th style="text-align:right">Total Sum:</th>
            <th>$25</th> <!-- Example total sum, replace with actual total sum -->
        </tr>
    </tfoot>
</table>

        </div>
    </div>
  </div>

<?php include "footer.php" ?>
