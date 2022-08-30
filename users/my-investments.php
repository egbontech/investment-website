<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?> 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>My Investments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">My Investments</li>         
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
                    <th scope="col">status</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End date</th>
                    <th scope="col">Earnings</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM investments WHERE email='$email'";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run) > 0)
                    { 
                        foreach($query_run as $data) 
                        { ?>
                   <tr>                                       
                    <td> $ <?= $data['amount'] ?></td>
                    <?php
                    if($data['status'] == 0)
                    { ?>
                        <td><span class="badge bg-success text-light">Active</span></td> 
                   <?php }
                   else if($data['status'] == 1)
                   { ?>
                   <td><span class="badge bg-success text-light">Completed</span></td> 
                  <?php }
                   else 
                  { ?>
                     <td><span class="badge bg-warning text-light">Suspended</span></td>                
                 <?php }
                    ?>
                   
                    <td><?= date('d-M-Y',strtotime($data['created_at'])) ; ?></td>
                    <td><?= $data['duration']?></td>
                    <td>$ <?= $data['earnings']?></td>
                    <td>
                        <form action="../codes/invest.php"method="POST">
                        <button class="btn btn-light"value="<?= $data['id']  ?>"name="delete">Delete</button>
                        </form>                        
                    </td>
                  </tr>
                       <?php }        
                    } else{ ?>
                    <td>You have no active investments</td>
                  <?php  }
                   ?>
                  
                               
                </tbody>
              </table>
              </div>
              
              <!-- End Bordered Table -->

             

              <!-- Primary Color Bordered Table -->
             
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>
                </main>
<?php include('inc/footer.php'); ?>       