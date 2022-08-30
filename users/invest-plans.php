<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Choose A Package</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Investments plan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->   
    <?php  
    if(isset($_SESSION['error']))
    { ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $_SESSION['error']  ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>               
    <?php }	unset($_SESSION['error'])
    ?>
    <div class="container text-center">
        <div class="row">
        <?php 
                        $query = "SELECT * FROM packages  WHERE status = '0' ORDER BY created_at DESC";
                        $query_run = mysqli_query($con, $query);
                        if($query_run)
                        {
                            foreach($query_run as $data)
                            { ?>
                             <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <?= $data['name'] ?>                      
                        </div>
                             <div class="card-body mt-2">
                            <h4> <?= $data['duration'] ?>  </h4>
                            <h5 class="text-muted"><?= $data['percent'] ?>% return</h5> 
                            <div class="mt-3">
                                <h6 class="mb-3">minimum: $<?= $data['min_a'] ?> </h6>                       
                                <h6>maixmum: $<?= $data['max_a'] ?> </h6>
                            </div>
                            <div class="mt-3">                          
                                <form action="../codes/packages.php"method="POST">
                                <a href="invest?I=<?=$data['id']?>" class="btn btn-outline-secondary mt-3">Invest</a>
                          
                                </form>                               
                            </div>
                            </div>
                        </div>
                    </div>
                           <?php }
                        }
                        ?>
           
        </div>    
   </div>       
      
              
       

       
 
  
            

        
   

    

  </main><!-- End #main -->
 
<?php include('inc/footer.php'); ?>

</html>