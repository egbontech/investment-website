<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Register New Admin</h1>
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
            <form action="codes/signupcode.php"method="POST">
                  
                  
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
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">name</label>
                      <input name="name" type="text" class="form-control"required>
                    </div>          
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Password</label>
                      <input name="password" type="text" class="form-control"required>
                    </div>          
                    <button type="submit" class="btn btn-secondary"name="register">Create New Admin</button>  
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
           <a href="manage-admins" class="btn btn-secondary">Back</a>
        </div>
              
       

       
 
  
            

        
   

    

  </main><!-- End #main -->
 
<?php include('inc/footer.php'); ?>

</html>