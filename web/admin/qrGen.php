<?php include "includes/connection.php" ?>
<?php 
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php  
// $query = "SELECT * FROM admin  ";
// $result = mysqli_query($connection, $query);
// while ($row = mysqli_fetch_array($result)) {
//     $email = $row['email'];
// }


?>
<!DOCTYPE html>
    <html class="no-js" lang="en">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>QRIDE PAY</title>
        <meta name="description" content="Al-Qalam Exam Record System">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="images/admin.png">

        <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


        <link rel="stylesheet" href="assets/css/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    </head>

    <body>  <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./">
                        <!-- <img src="images/logo.png" alt="Logo"> -->
                        <h6>QRIDE PAY</h6>
                    </a>
                    <a class="navbar-brand hidden" href="./">
                        <h6>L E S</h6>
                        <!-- <img src="images/logo2.png" alt="Logo"> -->
                    </a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <li>
                            <a href="viewUsers.php"> <i class="menu-icon ti-search"></i>Users</a>
                        </li>
                        <li>
                            <a href="#"> <i class="menu-icon ti-search"></i>Payments</a>
                        </li>
                        <li>
                            <a href="#"> <i class="menu-icon ti-upload"></i>Routes</a>
                        </li>
                        <li>
                            <a href="../adminlogin.php"> <i class="menu-icon ti-key"></i>Logout</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </aside>
        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">
                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar"> -->
                            </a>
                    <h3>Welcome To Admin <?php $_SESSION['email']; ?></h3>
                        </div>
                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Admin Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container col-lg-12 mt-">

                <div class="card mb-4">
                    <div class="card-header">
                        <h1 class="text-center page-header">Generated QR</h1>
                    </div>
                    <div class="card-body">
                        <h3>AUK BUS 1 QR-CODE</h3>
                        <div id="qrcode-container"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>AUK BUS 2 QR-CODE</h3>
                        <div id="qrcode-container-1"></div>
                    </div>
                </div>
            </div> <!-- .content -->
        </div>
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>


        <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

        <script src="qr-code.js"></script>

        <script>
        // Function to generate QR code with an embedded ID
        function generateQRCodeWithId(id) {
            const qrCodeContainer = document.getElementById("qrcode-container");
            qrCodeContainer.innerHTML = ""; // Clear previous content if any

            const qrCode = new QRCode(qrCodeContainer, {
            text: id, // Set the ID as the content of the QR code
            width: 500, // Adjust the width and height as per your requirement
            height: 500,
            });
        }

        // Call the function with the desired ID
        const yourId = "AUK-BUS-1"; // Replace this with your actual ID
        generateQRCodeWithId(yourId);

        function generateQRCodeWithId2(id) {
            const qrCodeContainer = document.getElementById("qrcode-container-1");
            qrCodeContainer.innerHTML = ""; // Clear previous content if any

            const qrCode = new QRCode(qrCodeContainer, {
            text: id, // Set the ID as the content of the QR code
            width: 500, // Adjust the width and height as per your requirement
            height: 500,
            });
        }

        // Call the function with the desired ID
        const yourId2 = "AUK-BUS-2"; // Replace this with your actual ID
        generateQRCodeWithId2(yourId2);
        </script>

    </body>
    </html>