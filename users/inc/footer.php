
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"style="background:#6c757d"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/main.js"></script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62d14e4eb0d10b6f3e7c7b36/1g80pjra1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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
    <?php if(isset($_SESSION['warning'])) {?>

    swal({ 
  text: "<?php echo $_SESSION['warning'] ?> ", 
  icon: "warning", 
});
 <?php 
    unset($_SESSION['warning'] );
   } 
 ?>
</script>
</body>