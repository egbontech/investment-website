<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin Panel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                  <h5 class="card-title">Total Users</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <?php
                      $total_users = "SELECT id FROM users";
                      $total_users_query = mysqli_query($con, $total_users);
                      
                      $count_users = mysqli_num_rows($total_users_query);
                      ?>
                      <h6><?= $count_users ?></h6>
            

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">              

                <div class="card-body">
                <?php
                  $total_with = "SELECT id FROM withdrawals WHERE status='0'";
                  $total_with_query = mysqli_query($con, $total_with);
                  
                  $count_withdrawals = mysqli_num_rows($total_with_query);
                  ?>
                  <h5 class="card-title">Pending Withdrawals</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-arrow-bar-up"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $count_withdrawals ?></h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

              
                <div class="card-body">
                <?php
                  $total_dep = "SELECT id FROM deposits WHERE status='0'";
                  $total_dep_query = mysqli_query($con, $total_dep);
                  
                  $count_deposits = mysqli_num_rows($total_dep_query);
                  ?>
                  <h5 class="card-title">Pending Deposits</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-arrow-in-down"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=  $count_deposits ?></h6>
                 

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">              

                <div class="card-body">
                <?php
                  $total_inv = "SELECT id FROM investments WHERE status='0'";
                  $total_inv_query = mysqli_query($con, $total_inv);
                  
                  $count_investments = mysqli_num_rows($total_inv_query);
                  ?>
                  <h5 class="card-title">Active Investments</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=  $count_investments?></h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

              

                <div class="card-body">
                <?php
                  $total_pac = "SELECT id FROM packages WHERE status='0'";
                  $total_pac_query = mysqli_query($con, $total_pac);
                  
                  $count_packages = mysqli_num_rows($total_pac_query);
                  ?>
                  <h5 class="card-title">Investment Plans</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $count_packages  ?></h6>
               

                    </div>
                  </div>

                </div>
                
              </div>

            </div><!-- End Customers Card -->
         
         
        


      </div>
    </section>

  </main><!-- End #main -->

<?php include('inc/footer.php'); ?>
</html>