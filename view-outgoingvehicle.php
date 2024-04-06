<?php $title = "View Outgoing Vehicle";
include "header.php" ?>
  <div class="message"></div>
  <div class="container">
    <div class="admin-content">
      <div class="card mb-4">
        <div class="card-header">
          <h2 class="d-inline">View Outgoing Vehicle</h2>
          <a href="manage-outgoingvehicle.php" class="btn btn-success float-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Outgoing Vehicle List
          </a>
        </div>
        <div class="card-body position-relative">
            <table class="table table-bordered">
                <tr>
                    <th>Parking Number</th>
                    <td>222</td>
                </tr>
                <tr>
                    <th>Vehicle Category</th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Vehicle Company Name</th>
                    <td>vehicle_company</td>
                </tr>
                <tr>
                    <th>Vehicle Registration Number</th>
                    <td>reg_number</td>
                </tr>
                <tr>
                    <th>Owner Name</th>
                    <td>owner_name</td>
                </tr>
                <tr>
                    <th>Owner Contact Number</th>
                    <td>owner_contact</td>
                </tr>
                <tr>
                    <th>In Time</th>
                    <td>
                    </td>
                </tr>
                <tr>
                    <th>Out Time</th>
                </tr>
                <tr>
                    <th>Parking Charges</th>
                    
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
            
                    </td>
                </tr>
            </table>
        </div>
      </div>
    </div>
  </div>

<?php include "footer.php" ?>
