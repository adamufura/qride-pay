<?php include "includes/connection.php" ?>
<?php 
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php  
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

        // SQL INJECTION
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
    
        $query = "SELECT * FROM registration WHERE uname = '{$username}' ";
        $login_result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($login_result)) {
            $database_id = $row['id'];
            $database_regNo = $row['regNo'];
            $database_username = $row['uname'];
            $database_email = $row['email'];
            $database_password = $row['password'];
        }
        if ($username === $database_username && $password === $database_password) {
            $_SESSION['regNo'] = $database_regNo;
            $_SESSION['uname'] = $database_username;
            $_SESSION['email'] = $database_email;
            $_SESSION['password'] = $database_address;

            header("Location: index.php");
        }else {
            header("Location: login.php");
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
<div class="container p-5">
    <div class="row">
        <div class="col-lg-5 bg-primar p-5 text-center  shadow" style="background-color: rgb(43, 43, 53);">
            <h1>QRIDE PAY</h1>
            <img src="images/Drive-removebg-preview.png" width="140px" class="rounded-circle" alt="">
             <div class="form-group col-lg-8 offset-sm-2">
                <button class="bt sign s2 mt-3" type="submit"><a href="login.html" style="color: #000;">LOGIN</a></button>
                </div>
                 <div class="form-group col-lg-8 offset-sm-2">
                    <button class="bt sign s2 mt-3" type="submit"><a href="register.html" style="color: #000;">SIGN UP</a></button>
                </div>
        </div>
         <div class="col-lg-6 bg-light p-5 shadow">
            <div class="card-header text-center">
                <h4>Sign In</h4>
            </div>
            <div class="card-body ">
                <form action="" method="POST">
                <div class="form-group col-lg-8 offset-sm-2">
                    <label for="id">Username</label>
                    <input type="text" placeholder="eg-ae3sss" name="username" class="form-control">
                </div>
                 <div class="form-group col-lg-8 offset-sm-2">
                    <label for="id">Password</label>
                    <input type="text" placeholder="eg-******" name="password" class="form-control">
                </div>
                 <div class="form-group col-lg-8 offset-sm-2">
                   <button class="bt mt-3" style="background-color: rgb(43, 43, 53);" type="submit" name="signin">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>