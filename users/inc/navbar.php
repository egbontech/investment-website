 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
<a href="index.html" class="logo d-flex align-items-center">  
 
 <img src="../uploads/logo/logo1.png" alt="">
 

</a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
 
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
    <li class="nav-item dropdown pe-3">
    <?php 
      $email = $_SESSION['email'];
      $query = "SELECT * FROM users WHERE email='$email'LIMIT 1";
      $query_run = mysqli_query($con, $query);
      if(mysqli_num_rows($query_run) > 0)
      {
        $data = mysqli_fetch_array($query_run);
        $image = $data['image'];
        $name = $data['name'];
        $address = $data['address'];
        $btc_wallet = $data['btc_wallet'];
        $country = $data['country'];
        $balance = $data['balance'];
        $bonus = $data['referal_bonus'];
      }
      
      ?>
      
     
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="../uploads/profile-picture/<?= $image ?>" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?= $name ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?= $name ?></h6>             
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>           
        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile">
            <i class="bi bi-person-lines-fill"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <style>
          .header-nav .nav-profile img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 15px;
        }
        </style>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-left"></i>
            <form action="../codes/logout.php"method="POST">
            <button type="submit"name="logout"style="background:transparent;border:none;color:black">Logout</button>
            </form>
            
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<div style="margin-top:60px;">
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="#" rel="noopener" target="_blank"><span class="blue-text">Markets</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>