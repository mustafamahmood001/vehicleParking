<?php include "header.php" ?>

<div class="admin-content">
  <div class="container">
    <div id="admin-dashboard">
        <div class="row">
            <div class="col-md-3">
              <div class="card young-passion-gradient">
                <div class="card-body text-center">
                  <span class="icon"><i class="fas fa-taxi"></i></span>
                  <p class="card-text mb-3"></p>
                  <h5 class="card-title text-white mb-0">Today Incoming Vehicle Entries</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card young-passion-gradient">
                <div class="card-body text-center">
                  <span class="icon"><i class="fas fa-taxi"></i></span>
                  <p class="card-text mb-3"></p>
                  <h5 class="card-title text-white mb-0">Today Outgoing Vehicle Entries</h5>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card purple-gradient">
                <div class="card-body text-center">
                  <span class="icon"><i class="fas fa-file"></i></span>
                  <p class="card-text mb-3"></p>
                  <h5 class="card-title text-white mb-0">Vehicle Category</h5>
                </div>
              </div>
              
            </div>
            <div class="col-md-3">
              <div class="card peach-gradient">
                <div class="card-body text-center">
                  <span class="icon"><i class="fas fa-taxi"></i></span>
                  <p class="card-text mb-3"></p>
                  <h5 class="card-title text-white mb-0">Total Incoming Vehicle</h5>
                </div>
              </div>
            </div>

        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-4">
          <div class="card-header">
            <h2>Latest Incoming Vehicle</h2>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-bordered">
              <thead>
                <th>S.No</th>
                <th>Parking Number</th>
                <th>Owner Name</th>
                <th>Vehicle Reg Number</th>
                <th>Vehicle InTime</th>
                <th>Status</th>
                <th>Action</th>
              </thead>
              <tbody>
               <tr class='tr-shadow'>
                    <td>1</td>
                    <td>223222</td>
                    <td>Amjad</td>
                    <td>lXX001</td>
                    <td>
                      2:30PM<br>
                      <small></small>
                    </td>
                    <td>
                      Active
                    </td>
                    <td>
                    <ul class="action-list">
    <li><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a></li>
    <li><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a></li>
</ul>


                    </td>
                </tr>

                <tr>
                  <td colspan="6" align="center">No Record Found.</td>
                </tr>
               <tr class='tr-shadow'>
                    <td>1</td>
                    <td>223567</td>
                    <td>Imran</td>
                    <td>lEE002</td>
                    <td>
                      6:30PM<br>
                      <small></small>
                    </td>
                    <td>
                      Active
                    </td>
                    <td>
                    <ul class="action-list">
    <li><a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</a></li>
    <li><a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a></li>
</ul>


                    </td>
                </tr>

                <tr>
                  <td colspan="6" align="center">No Record Found.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
