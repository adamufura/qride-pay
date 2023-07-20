<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="./images/Drive-removebg-preview.png" alt="Logo" style="height: 50px; width: 60px;">
          QridePay
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline ml-auto">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              
              <button class="btn  my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
        <section class="container-fluid">
          <div class="user-account">
            <i class="fa fa-user-circle-o account"></i><i class="fa fa-bell-o"></i><figcaption class="dev">Dev Safana</figcaption>
          </div>
          <div class="row">
            <div class="col">
              <div class="card mt-1 mx-1 ml-2  shadow">
                  <div class="card-body">
                      <p class="balance">Available balance.........</p>
                      <i class="fa fa-toggle-on"></i>
                      <span class="mybalance">N6,000,000</span>
                  </div>
              </div>
            </div>
           <div class="col">
              <div class="card mt-1 mx-1 ml-2  shadow">
                <div class="card-body text-center pay">
                  <i class="fa fa-qrcode"></i>
                  <button class="btn btn-outline-light btn-1"><a href="CAMERA_WEBSITE_URL" class="stp">Scan To Pay</a></button>
              </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 secondcard">
              <div class="card mt-1 mx-1 ml-2 secondcard shadow">
                  <div class="card-body">
                    <p class="wallet">wallet
                      <a href="MyWallet.php"><i class="fa fa-credit-card"></i></a>
                    </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 secondcard">
              <div class="card mt-1 mx-1 ml-2 secondcard  shadow">
                  <div class="card-body">
                    <p class="wallet">Transaction Slip
                      <i class="fa fa-print"></i>
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card mt-1 mx-1 ml-2 secondcard shadow">
                  <div class="card-body">
                    <p class="wallet">Account Setting
                      <i class="fa fa-user-circle-o user"></i>
                      </p>
                  </div>
              </div>
            </div>
            <div class="col-lg-6 ">
              <div class="card mt-1 mx-1 ml-2 secondcard shadow">
                  <div class="card-title"></div>
                  <div class="card-body">
                    <p class="wallet">Transaction History
                      <i class="fa fa-history"></i>
                      </p>
                  </div>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <br>
        </footer>
  
      
    



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>