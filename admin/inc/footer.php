
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
    <?php
    $rights = "SELECT c_rights FROM settings";
    $rights_query = mysqli_query($con, $rights);

    $row = mysqli_fetch_array($rights_query);
    $rights = $row['c_rights'];
    ?>
      <?=  $rights  ?>
    </div>
   
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/sweetalert.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <script>   
      <?php if(isset($_SESSION['success'])) {?>

      swal({ 
    text: "<?php echo $_SESSION['success'] ?> ", 
    icon: "success", 
  });
  <?php 
      unset($_SESSION['success'] );
    } 
  ?>
  </script>
    <script>   
      <?php if(isset($_SESSION['error'])) {?>

      swal({ 
    text: "<?php echo $_SESSION['error'] ?> ", 
    icon: "warning", 
  });
  <?php 
      unset($_SESSION['error'] );
    } 
  ?>
  </script>
</body>