<?php
// Set the page title dynamically
$pageTitle = "O - Restrictions"; 

// Include the header
include('../asset_for_pages/owner_header.php');
?>

<!-- Include Font Awesome for icons (Add this in your header file if not already included) -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"> -->
<style>
  .info-icon {
    font-size: 1.5em; /* Increase icon size */
    color: blue; /* Change icon color to blue */
    cursor: pointer; /* Change cursor to pointer */
  }
  .tooltip-inner {
    font-size: 1.25em; /* Increase tooltip text size */
  }
</style>

<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="#">
            <i class="fas fa-home"></i>
          </a>
        </li>
        <li class="separator">
          <i class="fas fa-chevron-right"></i>
        </li>
        <li class="nav-item">
          <a href="#">Restrictions</a>
        </li>
        <li class="separator">
          <i class="fas fa-chevron-right"></i>
        </li>
      </ul>
    </div>
    
    <!-- Restriction Cards Section -->
    <div class="row">
      
      <!-- Card 1: URLs -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">URL Restrictions</div>
            <span class="info-icon" data-toggle="tooltip" title="Restrict specific URLs by adding them here. You can also remove them from the list below.">
              <i class="fas fa-info-circle"></i>
            </span>
          </div>
          <div class="card-body">
            <input type="text" class="form-control mb-3" placeholder="Add URL" onfocus="showSuggestions('urlSuggestions')" list="urlSuggestions">
            <datalist id="urlSuggestions">
              <option value="https://example.com">
              <option value="https://anotherurl.com">
              <option value="https://website.com">
            </datalist>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Item List</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>https://example.com</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>https://anotherurl.com</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card 2: Usernames -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">Username Restrictions</div>
            <span class="info-icon" data-toggle="tooltip" title="Restrict specific usernames by adding them here. You can also remove them from the list below.">
              <i class="fas fa-info-circle"></i>
            </span>
          </div>
          <div class="card-body">
            <input type="text" class="form-control mb-3" placeholder="Add Username" onfocus="showSuggestions('usernameSuggestions')" list="usernameSuggestions">
            <datalist id="usernameSuggestions">
              <option value="JohnDoe">
              <option value="JaneSmith">
              <option value="MichaelLee">
            </datalist>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Item List</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>JohnDoe</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>JaneSmith</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card 3: Devices -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">Device Restrictions</div>
            <span class="info-icon" data-toggle="tooltip" title="Restrict specific devices by adding them here. You can also remove them from the list below.">
              <i class="fas fa-info-circle"></i>
            </span>
          </div>
          <div class="card-body">
            <input type="text" class="form-control mb-3" placeholder="Add Device" onfocus="showSuggestions('deviceSuggestions')" list="deviceSuggestions">
            <datalist id="deviceSuggestions">
              <option value="Desktop">
              <option value="Laptop">
              <option value="Smartphone">
            </datalist>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Item List</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Desktop</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Smartphone</td>
                    <td><button class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
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

<script>
// Function to confirm and remove a row
function removeRow(button) {
    const confirmation = confirm("Do you really want to remove this item?");
    if (confirmation) {
        const row = button.closest('tr');
        row.parentNode.removeChild(row);
    }
}

// Enable tooltips
document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
