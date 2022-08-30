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
            <form action="codes/deposits.php"method="POST">
                <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    
                    $query = "SELECT * FROM deposits WHERE id='$id' LIMIT 1";
                    $query_run = mysqli_query($con, $query);

                    if($query_run)
                    {
                        $row = mysqli_fetch_array($query_run);
                        $id = $row['id'];                     
                        $email = $row['email'];                     
                        $amount = $row['amount'];                                                         
                        $status = $row['status'];                                                         
                        $image = $row['image'];                                                         
                    }
                }
                ?>
                <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">User email</label>
                      <input type="text" class="form-control"required value="<?= $email ?>"name="email"readonly>
                    </div>               
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Amount($)</label>
                      <input type="text" class="form-control"required value="<?= $amount ?>"readonly>
                    </div>               
                <div class="col-md-6 form-group mb-3">
                    <label for=""class="mb-2">Status</label>
                    <select name="status" id=""class="form-control">
                        <option value="0"  <?= $status == 0 ?  'selected' : ''  ?>>Pending</option>
                        <option value="2"  <?= $status == 2 ?  'selected' : ''  ?> >Complete</option>
                        <option value="1" <?= $status == 1 ?  'selected' : ''  ?> >Reject</option>
                    </select>                      
                    </div>    
                    <div>
                      <img src="../uploads/receipts/<?= $image ?> "alt=""style="width:300px">
                    </div>           
                    <button type="submit"class="btn btn-secondary"name="update_deposit"value=<?= $id ?>>Update</button>  
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