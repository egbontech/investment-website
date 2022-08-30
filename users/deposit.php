<?php
session_start();
include('inc/header.php');
include('inc/navbar.php');
include('inc/sidebar.php');
?>

 

  <!-- ======= Sidebar ======= -->


<main id="main" class="main">
 
  <div class="pagetitle">
      <h1>Deposit</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Deposit</li>
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
    <div style="width:95%;margin:auto">
    <p>Copy our wallet address below and Pay,upload proof of payment below and make a deposit request. </p>
    </div>
    <div class="row mb-3">
   <style>
    .qr{
        width:320px;
        margin-bottom:20px
    }
    .qr-container{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column
    }
    .form1{
          padding:10px 10px;
          width:300px;
          background:white;
          display:flex;
          justify-content:space-between;
          opacity:0.85;
          border-radius:10px
        }
        input{
          border:none;
          outline:none;
        }
        #button{
          border:none;
          outline:none;
          color:#012970;
          background:#f7f7f7;
          border-radius:5px
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        @media (max-width: 500px) {
          .form{
            width:100%;
            margin:auto;
          }
        }
    
   </style>
   <div class="qr-container">
   <img src="assets/img/qr.png" class="qr" alt="">
   <div >
   <h3 style="text-align:center">Copy Wallet Address</h3>
      <div class="float-right form1">   
      <?php
        $rights = "SELECT wallet FROM settings";
        $rights_query = mysqli_query($con, $rights);

        $row = mysqli_fetch_array($rights_query);
        $wallet = $row['wallet'];
        ?>    
      <input type="text"value="<?= $wallet ?>"id="text">
      <button type="submit"id="button"><i class="bi bi-front" ></i></button>
      </div>

        </button>
        </div>  
        </div>
   </div>
   <div class="card"style="margin-top:20px">
  
            <div class="card-body">
              <h5 class="card-title">Deposit Request</h5>
              <p>Make deposit request by uploading proof of payment</p>

              <!-- Basic Modal -->
              
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#verticalycentered"style="">
                Request Deposit
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Deposit Request</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="form"data-aos="fade-up" >
			             
                         <form action="../codes/deposit.php" method="POST" class="F" id="form"enctype="multipart/form-data"> 
                         <div class="error"></div>						               
                             <div class="inputbox">
                             <input class="input" type="number" name="amount" autocomplete="off" value="" required = "required" />
                             <span>Amount In USD</span><br>										
                             </div>     
                             <input type="hidden"value="<?= $_SESSION['email'] ?>"name="email">                      
                             <div>
                             <input  type="file"class="form-control mt-3"required name="image"/>                           					
                             </div>                            
                         </div>
             
                     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-secondary"name="deposit">Submit Request</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div><!-- End Basic Modal-->

              <style>                 
                     #form{margin: auto;width: 80%;}
                    .form .inputbox{position: relative;width: 100%;margin-top: 20px;}
                    .form .inputbox input,.form .inputbox textarea{width: 100%;padding: 5px 0;font-size: 12px;border: none;outline: none;background: transparent;border-bottom: 2px solid #ccc;margin: 10px 0;}
                    .form .inputbox span{position: absolute;left: 0;padding: 5px 0;font-size: 12px;margin: 10px 0;}
                    .form .inputbox input:focus ~ span,.form .inputbox textarea:focus ~ span{color:#0dcefd;font-size: 12px;transform: translateY(-20px);transition: 0.4s ease-in-out;}
                    .form .inputbox input:valid ~ span,.form .inputbox textarea:valid ~ span{color:#0dcefd;font-size: 12px;transform: translateY(-20px);}
                    .B{color:#ccc;margin-top: 20px;background:transparent ;padding: 12px;font-weight: 400;transition: 0.8s ease-in-out;letter-spacing: 1px;border: 2px solid #0d6efd;}
                    .B:hover{background: #186;}
                    .error{margin-bottom: 10px;padding: 0px;background: #d3ad7f;text-align: center;font-size: 12px;transition:  all 0.5s ease;color:white;border-radius: 3px;}
             </style>
          </div>

          </div>

        
    </div>
    <div class="pagetitle">
      <h1>Deposit History</h1>      
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
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $email = $_SESSION['email'];
                    $query = "SELECT id,amount,status,created_at FROM deposits WHERE email='$email'";
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
                        <td><span class="badge bg-warning text-light">Pending</span></td> 
                   <?php }
                   else if($data['status'] == 1)
                   { ?>
                   <td><span class="badge bg-danger text-light">Rejected</span></td> 
                  <?php }
                   else 
                  { ?>
                     <td><span class="badge bg-success text-light">Completed</span></td>                
                 <?php }
                    ?>
                   
                    <td><?= date('d-M-Y',strtotime($data['created_at'])) ; ?></td>
                    <td>
                        <form action="../codes/deposit.php"method="POST">
                        <button class="btn btn-light"value="<?= $data['id']  ?>"name="delete">Delete</button>
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
  <script>
   
   let input = document.querySelector("#text");
   let inputbutton = document.querySelector("#button");

   inputbutton.addEventListener('click',copytext)

   function copytext()
   {
        input.select();
       
        document.execCommand('copy');

        inputbutton.innerHTML = 'copied!';
   }


</script>
<?php include('inc/footer.php'); ?>

</html>