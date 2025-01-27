<?php
// Set the page title dynamically
$pageTitle = "A - Dashboard"; 

// Include the header
include('../asset_for_pages/admin_header.php');
?>

<div class="page-inner">
    <!-- Quick Links Section -->
    <div class="mb-4">
        <button class="btn btn-primary" id="toggleQuickLinks">Quick Links</button>
        <div id="quickLinks" class="mt-3" style="display: none;">
            <div class="d-flex justify-content-around">
                <a href="add_user.php" class="text-center text-decoration-none">
                    <i class="fas fa-user-plus fa-2x"></i>
                    <div>Add User</div>
                </a>
                <a href="bandwidth_usage.php" class="text-center text-decoration-none">
                    <i class="fas fa-chart-line fa-2x"></i>
                    <div>Bandwidth Usage</div>
                </a>
                <a href="device_management.php" class="text-center text-decoration-none">
                    <i class="fas fa-desktop fa-2x"></i>
                    <div>Device Management</div>
                </a>
                <a href="help_support.php" class="text-center text-decoration-none">
                    <i class="fas fa-life-ring fa-2x"></i>
                    <div>Help & Support</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Dashboard Main Content -->
    <div class="row">
      
      <!-- Key Metrics Section -->
      <div class="col-md-4">
        <!-- Total Bandwidth Used Card -->
        <div class="card">
          <div class="card-header">
            <div class="card-title">Total Bandwidth Used Jan 2025 4th Week</div>
          </div>
          <div class="card-body">
            <canvas id="bandwidthChart"></canvas> <!-- Placeholder for chart -->
            <div class="mt-3">Total Used: 120 GB</div>
          </div>
        </div>
      </div>

      <div class="col-md-4 d-flex">
        <!-- Active Users Card (with Add User button) -->
        <div class="card flex-fill">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">Active Users</div>
           <a href="add_user.php">
            <button class="btn btn-success">Add User</button>
           </a> <!-- Add User Button -->
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>User Name</th>
                    <th>Data Used (GB)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>                    
                    <td>
                    <a style="text-decoration: none; color: inherit;" href="user-info-and-edit.php">
                      John Doe
                    </a>
                  </td>                  
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Michael Lee</td>
                    <td>30</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      

      <div class="col-md-4">
        <!-- Devices Connected Card -->
        <div class="card">
          <div class="card-header">
            <div class="card-title">Devices Connected</div>
          </div>
          <div class="card-body">
            <canvas id="deviceStatsChart"></canvas> <!-- Placeholder for chart -->
            <div class="mt-3">Devices Connected: 50</div>
          </div>
        </div>
      </div>
      
    </div>

    <!-- Bandwidth Usage Section -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Bandwidth Usage by Users</div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>User Name</th>
                    <th>Data Used (GB)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>40</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Michael Lee</td>
                    <td>30</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Device Stats Section -->
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Device Stats</div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Device Name</th>
                    <th>Data Used</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Device 1</td>
                    <td>30 GB</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Device 2</td>
                    <td>20 GB</td>
                    <td>Active</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Device 3</td>
                    <td>10 GB</td>
                    <td>Inactive</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php
// Include the footer
include('../asset_for_pages/footer.php');
?>

<script src="../../assets/js/core/jquery-3.7.1.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Datatables -->
<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
<!-- Kaiadmin JS -->
<script src="../../assets/js/kaiadmin.min.js"></script>
<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<script src="../../assets/js/setting-demo2.js"></script>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Toggle Quick Links Visibility
    const quickLinksButton = document.getElementById('toggleQuickLinks');
    const quickLinksDiv = document.getElementById('quickLinks');

    quickLinksButton.addEventListener('click', function () {
      if (quickLinksDiv.style.display === 'none' || quickLinksDiv.style.display === '') {
        quickLinksDiv.style.display = 'block'; // Show the links
      } else {
        quickLinksDiv.style.display = 'none'; // Hide the links
      }
    });

    // Line Chart for Total Bandwidth Used
    var ctx1 = document.getElementById('bandwidthChart').getContext('2d');
    var bandwidthChart = new Chart(ctx1, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: 'Bandwidth Used (GB)',
          data: [12, 15, 10, 20, 18, 25, 30],
          borderColor: '#4e73df',
          backgroundColor: 'rgba(78, 115, 223, 0.1)',
          borderWidth: 2
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Bar Chart for Devices Connected
    var ctx3 = document.getElementById('deviceStatsChart').getContext('2d');
    var deviceStatsChart = new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: ['Device 1', 'Device 2', 'Device 3', 'Device 4', 'Device 5'],
        datasets: [{
          label: 'Data Used (GB)',
          data: [10, 15, 5, 20, 25],
          backgroundColor: '#ffc107',
          borderColor: '#ffc107',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>
