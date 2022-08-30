<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


  <main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Edit User  Detials</h1>
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
            <div class="card"style="padding:10px">
            <form action="codes/users.php"method="POST">
                <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    
                    $query = "SELECT * FROM users WHERE id='$id' LIMIT 1";
                    $query_run = mysqli_query($con, $query);

                    if($query_run)
                    {
                        $row = mysqli_fetch_array($query_run);
                        $name = $row['name'];                       
                        $id = $row['id'];                       
                        $balance = $row['balance'];                       
                        $email = $row['email'];                       
                        $wallet = $row['btc_wallet'];                       
                        $referral = $row['refered_by'];                       
                        $country = $row['country'];                       
                        $bonus = $row['referal_bonus'];                                         
                    }                    
                }
                ?>
                <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Package name</label>
                      <input type="text" class="form-control"required value="<?= $name ?>"readonly>
                    </div>                                  
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Email</label>
                      <input name="email" type="text" class="form-control"required value="<?= $email ?>">
                    </div>                                  
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Country</label>
                      <input type="text" class="form-control"required  value="<?= $country ?>"readonly>
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Bitcoin Wallet</label>
                      <input type="text" class="form-control"required  value="<?= $wallet ?>"readonly>
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Balance</label>
                      <input name="balance" type="number" class="form-control"required  value="<?= $balance ?>">
                    </div> 
                    <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Referal Bonus</label>
                      <input name="referal_bonus" type="number" class="form-control"required  value="<?= $bonus ?>">
                    </div> 
                                     
                  
                    <button type="submit" class="btn btn-secondary"name="update_user"value=<?= $id ?>>Update</button>  
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
           <a href="manage-users" class="btn btn-secondary">Back</a>
        </div>
              
       

       
 
  
            

        
   

    

  </main><!-- End #main -->
 
<?php include('inc/footer.php'); ?>

</html>