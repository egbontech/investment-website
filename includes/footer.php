	
    <!-- Footer Area Start -->
    <footer class="footer" id="footer">
	
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-widget about-widget">
                    <div class="fotter-logo">
                        <img src="uploads/logo/<?= $logo_image  ?>" alt=""style="width:250px">
                    </div>
                    <div class="about-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nemo error sit voluptatem consectetur repellat.
                        </p>
                    </div>
                
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-widget info-link-widget">
                    <h4 class="title">
                        Quick Links
                    </h4>
                    <ul class="link-list">
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>About
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>investors
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-widget info-link-widget link-w-2">
                    <h4 class="title">
                        Company
                    </h4>
                    <ul class="link-list">
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i> Terms
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i> Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>Security
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>Support
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-angle-double-right"></i>Careers
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-area">
                        <?php
                        $rights = "SELECT c_rights FROM settings";
                        $rights_query = mysqli_query($con, $rights);

                        $row = mysqli_fetch_array($rights_query);
                        $rights = $row['c_rights'];
                        ?>
                        <p>
                            <?= $rights ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="social-links">
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> 
<!-- Footer Area End -->





<!-- jquery -->
<script src="assets/js/jquery.js"></script>
<!-- popper -->
<script src="assets/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- plugin js-->
<script src="assets/js/plugin.js"></script>
<!-- main -->
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
</body>



</html>