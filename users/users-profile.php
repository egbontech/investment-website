<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
     
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
          <?php  
          if(isset($_SESSION['success']))
          { ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_SESSION['success'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php }	unset($_SESSION['success'])
          ?>
          <?php  
          if(isset($_SESSION['error']))
          { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $_SESSION['error']  ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>               
          <?php }	unset($_SESSION['error'])
          ?>
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../uploads/profile-picture/<?= $image ?>" alt="Profile" class="rounded-circle">
              <h2><?= $name ?></h2>             
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8"><?= $name ?></div>
                  </div>          


                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?= $country ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?= $address ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Bitcoin Wallet</div>
                    <div class="col-lg-9 col-md-8"><?= $btc_wallet ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= $_SESSION['email'] ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="../codes/user-profile.php"method="POST" enctype="multipart/form-data">            
                    <input type="hidden"value="<?= $image ?>"name="old_image">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Picture</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../uploads/profile-picture/<?= $image ?>" alt="Profile">
                        <style>
                          ::-webkit-file-upload-button{                         
                          outline:none;
                          border:none;
                          background:#6c757d;
                          color:#f7f7f7;
                          border-radius:10px
                        }
                        .rounded-circle{
                          width: 100px;
                          height: 100px;
                          object-fit: cover;
                          border-radius: 10px;
                          margin-right: 15px;
                        }
                        </style>
                        <div class="pt-2">
                         <input type="file"name="image" >
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="<?= $name ?>">
                      </div>
                    </div>

                  

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?= $address ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Bitcoin Wallet</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="btc_wallet" type="text" class="form-control" id="Phone" value="<?= $btc_wallet ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?= $_SESSION['email'] ?>"readonly>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="<?= $country ?>"readonly>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-secondary"name="update-profile">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                 

                </div>

              

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 <?php include('inc/footer.php'); ?>