<?php
session_start(); 
include('includes/header.php');
include('includes/navbar.php'); 
?>

	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area extra-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="title extra-padding">
						Our Investors
					</h4>
					<ul class="breadcrumb-list">
						<li>
							<a href="index">
								<i class="fas fa-home"></i>
								Home
							</a>
						</li>
						<li>
							<span><i class="fas fa-chevron-right"></i> </span>
						</li>
						<li>
							<a href="team">Investors</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

    <!-- Team Area Start -->
    <section class="team team-page">
        <div class="container">
        <div class="section-heading"style="margin-bottom:100px">
				<h2 class="title">
					Top Investors
				</h2>	
			</div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img">
                            <img src="assets/images/team/img1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4 class="name">
                                Jennefer
                            </h4>
                            <p class="designation">
                                $54,500
                            </p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img">
                            <img src="assets/images/team/img2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4 class="name">
                                Zach
                            </h4>
                            <p class="designation">
                                $30,000
                            </p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img">
                            <img src="assets/images/team/img3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4 class="name">
                                Fatima
                            </h4>
                            <p class="designation">
                                $40,000
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="img">
                            <img src="assets/images/team/img4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h4 class="name">
                                Greg
                            </h4>
                            <p class="designation">
                                $23,200
                            </p>
                        
                        </div>
                    </div>
                </div>
               
             </div>
        </div>
    </section>
    <!-- Team Area End -->

    <?php  include('includes/footer.php'); ?>


