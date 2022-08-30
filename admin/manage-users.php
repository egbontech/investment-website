<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>All Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Deposit</li>
        </ol>     
      </nav>     
    </div><!-- End Page Title -->  
    <div class="card">
            <div class="card-body">                          
              <!-- Bordered Table -->
              <div class="table-responsive">
              <table class="table table-borderless">
                <thead>
                  <tr>                   
                    <th scope="col">ID</th>                
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Refered By</th>
                    <th scope="col">Profile Picture</th>                   
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                 
                  </tr>
                </thead>
                <tbody>
                    <?php                  
                    $query = "SELECT * FROM users";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    { 
                        foreach($query_run as $data) 
                        { ?>
                   <tr>                                       
                    <td>  <?= $data['id'] ?></td>                   
                    <td>  <?= $data['name'] ?></td>                   
                    <td>  <?= $data['email'] ?></td>                   
                    <td>  <?= $data['refered_by'] ?></td>                   
                    <td>  
                    <img src="../uploads/profile-picture/<?= $data['image'] ?>" style="width:50px;height:50px"alt="Profile" class="">
                    </td>                   
                    <td>  
                    <a href="edit-user?id=<?= $data['id']  ?>"class="btn btn-light">Edit</a> 
                    </td>                   
                    <td>  
                    <form action="codes/users.php"method="POST">  
                      <input type="hidden"value="<?= $data['image'] ?>"name="profile_pic">                         
                    <button class="btn btn-outline-danger"name="delete_user"value="<?= $data['id'] ?>">Delete</button>
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