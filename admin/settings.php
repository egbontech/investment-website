<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Website settings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashbaord">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">settings</li>
        </ol>     
      </nav>     
    </div><!-- End Page Title -->  
    <style>
        .add-btn{
            display:flex;
            justify-content:flex-end;
            align-items:center;
            margin:15px 0
        }
    </style>
        
  
    <div class="container">
        <div class="row">
            <div class="card">
            <form action="codes/settings.php"method="POST"enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <?php
                    $query = "SELECT * FROM settings";
                    $query_run = mysqli_query($con ,$query);

                    if($query_run)
                    {
                        $row = mysqli_fetch_array($query_run);
                        $name = $row['name'];
                        $email = $row['email'];
                        $wallet = $row['wallet'];
                        $logo = $row['logo'];
                        $c_rights = $row['c_rights'];
                        $a_link = $row['a_link'];
                        $reset = $row['reset'];
                    }
                    ?>
                    <label for=""class="mb-2">website name</label>
                      <input name="name" type="text" class="form-control"value=<?= $name ?>>
                    </div>                                  
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">website email</label>
                      <input name="email" type="email" class="form-control" value = "<?= $email ?>">
                    </div>                                  
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Btc wallet address</label>
                      <input name="btc_w" type="text" class="form-control" value = "<?= $wallet ?>">
                    </div>                          
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Footer copyrights</label>
                      <input name="c_rights" type="text" class="form-control" value = "<?= $c_rights ?>">
                    </div>                          
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Affiliate link</label>
                      <input name="a_link" type="text" class="form-control" value = "<?= $a_link ?>">
                    </div>                          
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Reset-password link</label>
                      <input name="reset" type="text" class="form-control" value = "<?= $reset ?>">
                    </div>                          
                    <input type="hidden"value = "<?= $logo ?>"name="old_image">        
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">website logo</label>
                      <input name="image" type="file" class="form-control">
                    </div>                                  
                  
                    <button type="submit" class="btn btn-secondary"name="update_settings">Save Changes</button>  
                </div>  
                </form>
                    <style>
                        input[type=number]::-webkit-inner-spin-button,
                        input[type=number]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                      }
                    </style>
        </div>    
   </div>       
        
              
       

       
 
  
            

        
   

    

  </main><!-- End #main -->
 
<?php include('inc/footer.php'); ?>

</html>