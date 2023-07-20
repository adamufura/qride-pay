<?php include "includes/connection.php" ?>
<?php 
if (!isset($_SESSION)) {
  session_start();
}
?>

<?php  
    if (isset($_POST['registerQ'])) {
      $regno =  $_POST['reg'];
      $username =  $_POST['username'];
      $email =  $_POST['email'];
      $password =  $_POST['password'];

      $query = "INSERT INTO registration (regNo, uname, email, password) VALUES ('{$regno}', '{$username}', '{$email}', '{$password}' ) ";

      $result = mysqli_query($connection, $query);
      if (!$result) {
          echo "NOOOOOOOOOOOOOOOOO";
      }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>QRIDE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/top.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
      .bt{
          border: 3px solid transparent;
          background: blue;
          width: 292px;
          
      }
      .sign{
          border-radius: 15px;
      }
      .s2{
          background: white;
      }
        body{
        background-image: url(./assets/img/b2.jpg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      } 
  </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="text-center">Register</h4>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="username">Registration No:</label>
                    <input type="text" class="form-control" id="username" name="reg" required>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                  </div> -->
                  <button type="submit" class="btn btn-block " style="background-color: rgb(43, 43, 53); color: wheat;" name="registerQ">Register</button>
                  <h5>Already have an account? <a href="login.php">Login</a></h5>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>