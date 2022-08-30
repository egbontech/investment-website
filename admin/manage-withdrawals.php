<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Pending Withdrawals</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Withdrawals</li>
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
                    <th scope="col">Amount</th>
                    <th scope="col">Email</th>                                   
                    <th scope="col">Status</th>                   
                    <th scope="col">Date</th>             
                    <th scope="col">Complete request</th>
                  </tr>
                </thead>
                <tbody>
                    <?php                
                    $query = "SELECT * FROM withdrawals WHERE status = '0'";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    { 
                        foreach($query_run as $data) 
                        { ?>
                   <tr>                         
                    <td>  $<?= $data['amount'] ?></td>                   
                    <td>  <?= $data['email'] ?></td>                  
                    <?php
                        if($data['status'] == 0)
                        { ?>
                            <td><span class="badge bg-warning text-light">Pending</span></td> 
                    <?php }
                  
                    else 
                    { ?>
                        <td><span class="badge bg-success text-light">Completed</span></td>                
                    <?php }
                        ?>
                    <td><?= date('d-M-Y',strtotime($data['created_at'])) ; ?></td>           
                                   
                   
              
                    <td>
                      
                        <form action="codes/withdrawals.php"method="POST">                         
                        <button class="btn btn-light"value="<?= $data['id']  ?>"name="complete">Complete</button>
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