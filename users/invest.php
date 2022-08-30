<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

  <main id="main" class="main">
      <?php
        if(isset($_GET['I']))
        {
            $id = $_GET['I'];
            $query = "SELECT * FROM packages WHERE id='$id' LIMIT 1";
            $query_run = mysqli_query($con, $query);            
         
            $row = mysqli_fetch_array($query_run);              
          
        }
        ?>
  <div class="pagetitle">     
      <h1>Available Balance: $<?= $balance ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Invest</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> 
  <div class="container">
        <div class="row">
            <div class="card">
               
            <form action="../codes/invest.php"method="POST">
                <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Package name</label>
                      <input name="name" type="text" class="form-control"required value ="<?=  $row['name'] ?>"readonly>
                    </div>                                  
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Package duration</label>
                      <input name="duration" type="text" class="form-control"required value ="<?=  $row['duration'] ?>"  readonly>
                    </div>                  
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Amount</label>
                      <input name="amount" type="number" class="form-control"required placeholder="Minimum-amount: $<?= $row['min_a'] ?>">
                    </div>                  
                    <input type="hidden"value="<?= $_SESSION['email'] ?>"name="email">
                    <input type="hidden"value="<?= $row['min_a'] ?>"name="min_a">
                    <input type="hidden"value="<?= $row['id'] ?>"name="id">
                    <input type="hidden"value="<?= $row['percent'] ?>"name="percent">                     
                </div>  
                <button type="submit" class="btn btn-secondary"name="start_package">Start Investment</button> 
                </form>
                <div class="add-btn">
                  <a href="invest-plans" class="btn btn-secondary">Back</a>
                </div>
                    <style>
                        input[type=number]::-webkit-inner-spin-button,
                        input[type=number]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                           }
                           
                        .add-btn{
                            display:flex;
                            justify-content:flex-end;
                            align-items:center;
                            margin:15px 0
                        }
                    </style>
                   
        </div>    
   </div>  

  </main><!-- End #main -->

 <?php include('inc/footer.php'); ?>