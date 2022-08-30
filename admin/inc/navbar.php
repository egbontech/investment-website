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
<?php
$name = $_SESSION['name'];
$sql = "SELECT name FROM admins WHERE name='$name' LIMIT 1";
$sql_query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($sql_query);
$name = $row['name'];

?>
<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">        
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $name ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?= $name ?></h6>             
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>           

        <li>
          <div class="dropdown-item d-flex align-items-center" >
            <i class="bi bi-box-arrow-left"></i>
            <form action="codes/logout.php"method="POST">
            <button type="submit"name="logout"style="background:transparent;border:none;color:black">Logout</button>
            </form>
            
           </div>
        </li>
       

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->