<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Manage Investment Plans</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashbaord">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Deposit</li>
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
            <form action="../codes/packages.php"method="POST">
                <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Package name</label>
                      <input name="name" type="text" class="form-control"required>
                    </div>                                  
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Package duration</label>
                      <input name="duration" type="text" class="form-control"required >
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Percentage return</label>
                      <input name="percent" type="number" class="form-control"required >
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">minimum amount</label>
                      <input name="min_amount" type="number" class="form-control"required >
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Maximum amount</label>
                      <input name="max_amount" type="number" class="form-control"required >
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Status</label>
                      <input name="status" type="checkbox" >
                    </div> 
                    <button type="submit" class="btn btn-secondary"name="add_package">Create New Package</button>  
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
        <div class="add-btn">
           <a href="manage-packages" class="btn btn-secondary">Back</a>
        </div>
              
       

       
 
  
            

        
   

    

  </main><!-- End #main -->
 
<?php include('inc/footer.php'); ?>

</html>