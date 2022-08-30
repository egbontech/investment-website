<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Admins</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Deposit</li>
        </ol>     
      </nav>     
    </div><!-- End Page Title -->  
    <style>
        .add-btn{
            display:flex;
            justify-content:center;
            align-items:center;
            margin:15px 0
        }
    </style>
         <div class="add-btn">
           <a href="register" class="btn btn-secondary float-center">Create New Admin</a>
        </div>
    <div class="card">
            <div class="card-body">                          
              <!-- Bordered Table -->
              <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>                   
                    <th scope="col">ID</th>                
                    <th scope="col">Name</th>                                  
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>                 
                  </tr>
                </thead>
                <tbody>
                    <?php    
                    $user_id = $_SESSION['id'] ;             
                    $query = "SELECT * FROM admins";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    { 
                        foreach($query_run as $data) 
                        { ?>
                   <tr>                                       
                    <td>  <?= $data['id'] ?></td>                   
                    <td>  <?= $data['name'] ?></td>                          
                    <td>  
                    <a href="edit-admin?id=<?= $data['id']  ?>"class="btn btn-light">Edit</a> 
                    </td>                   
                    <td>
                        <form action="codes/signupcode.php"method="POST">
                        <input type="hidden"value="<?= $user_id ?>"name="auth_id">
                        <button class="btn btn-danger"value="<?= $data['id']  ?>"name="delete">Delete</button>
                        </form>                        
                    </td>
              
                   
                  </tr>
                       <?php }        
                    }
                   
                   ?>
                  
                               
                </tbody>
              </table>
              </div>
              
              <!-- End Bordered Table -->

             

              <!-- Primary Color Bordered Table -->
             
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>
              
       

       
 
  
            

        
   

    

  </main><!-- End #main -->
 
<?php include('inc/footer.php'); ?>

</html>