<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Add custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #fff;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      font-size: 24px;
      font-weight: bold;
    }
    .navbar .navbar-nav {
      align-items: center;
    }
    .navbar .nav-item {
      margin-left: 10px;
    }
    .sidebar {
      background-color: #343a40;
      color: #fff;
      min-height: 100vh;
    }
    .sidebar .sidebar-heading {
      font-size: 18px;
      font-weight: bold;
      padding: 20px;
    }
    .sidebar .nav-link {
      color: #fff;
    }
    .sidebar .nav-link:hover {
      background-color: #444;
    }
    .content {
      padding: 20px;
    }
    .card {
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .card-header {
      background-color: #f0f0f0;
      font-weight: bold;
    }
    .card-body {
      padding: 20px;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .table {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="navbar-brand">Bus Payment System - Admin Dashboard</div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main content area -->
  <div class="container-fluid mt-4">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-2 d-none d-md-block sidebar">
        <div class="position-sticky">
          <h5 class="sidebar-heading">Menu</h5>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Routes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Content -->
      <main class="col-md-10 ms-sm-auto px-4 content">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4>Recent Payments</h4>
              </div>
              <div class="card-body">
                <!-- Add content for recent payments here -->
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4>Users</h4>
              </div>
              <div class="card-body">
                <!-- Add content for users here -->
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>All Payments</h4>
              </div>
              <div class="card-body">
                <!-- Add content for all payments here -->
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
      <!-- Add Bootstrap JS and jQuery scripts -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>