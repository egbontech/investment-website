<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>          
        </ol>
      
      </nav>   
      <style>
        .form{
          padding:10px 10px;
          width:300px;
          background:white;
          display:flex;
          justify-content:space-between;
          opacity:0.85;
          border-radius:10px
        }
        input{
          border:none;
          outline:none;
        }
        #button{
          border:none;
          outline:none;
          color:#012970;
          background:#f7f7f7;
          border-radius:5px
        }
        @media (max-width: 500px) {
          .form{
            width:100%;
            margin:auto;
          }
        }
      </style>
      <h3 style="opacity:0.8">Affiliate/Referall Link</h3>
      <div class="float-right form">
      <?php
      $rights = "SELECT a_link FROM settings";
      $rights_query = mysqli_query($con, $rights);

      $row = mysqli_fetch_array($rights_query);
      $a_link = $row['a_link'];
      ?>       
      <input type="text"value="<?= $a_link ?>?affiliate-link=<?= $_SESSION['email'] ?>"id="text">
      <button type="submit"id="button"><i class="bi bi-front" ></i></button>
      </div>
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
                  <h5 class="card-title">Available Balance</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>USD <?= $balance ?></h6>
            

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">              

                <div class="card-body">
                  <h5 class="card-title">Referall Bonus</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>USD <?= $bonus ?></h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
         
          
           
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-6">

              <div class="card info-card customers-card">

              

                <div class="card-body">
                  <?php
                  $email = $_SESSION['email'] ;
                  $invest_query = "SELECT id FROM investments WHERE email='$email'";
                  $invest_query_run = mysqli_query($con, $invest_query);

                  $count_invest = mysqli_num_rows($invest_query_run);   

                  $referal = "SELECT id FROM users WHERE refered_by='$email'";
                  $referal_run = mysqli_query($con, $referal);  
                  
                  $count_referals = mysqli_num_rows($referal_run);  
                  ?> 
                  <h5 class="card-title">Active Investments</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $count_invest  ?></h6>
               

                    </div>
                  </div>

                </div>
                
              </div>

            </div><!-- End Customers Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">              

                <div class="card-body">
                  <h5 class="card-title">Total Referalls</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $count_referals  ?></h6>
                     

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
         


      </div>
    </section>
    <script>
   
   let input = document.querySelector("#text");
   let inputbutton = document.querySelector("#button");

   inputbutton.addEventListener('click',copytext)

   function copytext()
   {
        input.select();
       
        document.execCommand('copy');

        inputbutton.innerHTML = 'copied!';
   }


</script>
  </main><!-- End #main -->

<?php include('inc/footer.php'); ?>
</html>