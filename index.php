<?php
session_start(); 
include('includes/header.php');
include('includes/navbar.php'); 
?>


	
	<!--Main-Menu Area Start-->
	

	<!-- Hero Area Start -->
    <div class="hero-area" id="hero-area"style="margin-top:20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-content"style="width:100%">
                        <div class="content">
                            <h1 class="title">
                              100% Secure Crypto Currency Investment Platform
                            </h1>
                            <p class="text">
                                    Grow your crypto currency portfolio investing with us to secure a better future.
                            </p>
							<?php
							if(isset($_SESSION['admin']))
							{ ?>
								<a href="admin/signin"class="base-btn1" >Admin</a>
							<?php }
							else if(isset($_SESSION['auth']))
							{ ?>
								<a href="signup"class="base-btn1" >Dashboard</a>
							<?php }
							 else
							{ ?>
								<a href="signup"class="base-btn1" >Get started</a>							
						  <?php	}
							?>
                           
                        </div>
                    </div>
                </div>
				
            </div>
			
        </div>
    </div>
	<!-- Hero Area End -->

	<!-- Top Counter Start -->
	<section class="top-counter">
		<div class="container">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-counter">
                                <div class="icon">
									<i class="flaticon-community"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">
										73,234
									</h4>
									<h6 class="sub-title">
										Total Members
									</h6>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-counter">
                                <div class="icon">
                                    <i class="flaticon-purse"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        60,548.34
                                    </h4>
									<h6 class="sub-title">
										Total Deposited
									</h6>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-counter">
                                <div class="icon">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">
										90,548.37
                                    </h4>
									<h6 class="sub-title">
										Total Profits
									</h6>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	</section>
	<!-- Top Counter End -->

	<!-- About-area Start -->
	<section class="about-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h2 class="title">
							About Us
						</h2>
						<p class="text">
							We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.
						</p>
					</div>
				</div>
			</div>
			<div class="row mb-100">
				<div class="col-lg-6 d-flex align-self-center">
					<div class="image">
						<img src="assets/images/about.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 align-self-center">
					<div class="content">
						<div class="top-heading">
							<h4 class="title">
								A faster way to do just about anything
							</h4>
							<p class="text">
								Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting him, the the to said in need gradually wellfeigned.
							</p>
						</div>
						<ul class="about-list with-icon">
							<li>
								<div class="feature-info">
									<div class="icon">
										<i class="flaticon-sticker"></i>
									</div>
									<div class="inner-content">
										<h4 class="title">
											Licensed & Certified
										</h4>
										<p>
											May moment. Ever a proposal, texts time, place end and heard assistant confidence instead designer
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="feature-info">
									<div class="icon">
										<i class="flaticon-save-money"></i>
									</div>
									<div class="inner-content">
										<h4 class="title">
											Saving & Investments
										</h4>
										<p>
											May moment. Ever a proposal, texts time, place end and heard assistant confidence instead designer
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="feature-info">
									<div class="icon">
										<i class="flaticon-user"></i>
									</div>
									<div class="inner-content">
										<h4 class="title">
											100% Secure Investments
										</h4>
										<p>
											May moment. Ever a proposal, texts time, place end and heard assistant confidence instead designer
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About-area End -->
		<!-- How It Work Start -->
		<section class="how-it-work">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading text-white">
						<h2 class="title">
							How does it works
						</h2>
						<p class="text">
							We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="single-how-it-work">
						<div class="icon">
							<i class="flaticon-user-2"></i>
						</div>
						<div class="content">
							<h4 class="title">
								Create Account
							</h4>
							<p>
								Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting 
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-how-it-work">
						<div class="icon">
							<i class="flaticon-calendar"></i>
						</div>
						<div class="content">
							<h4 class="title">
								Start Investing
							</h4>
							<p>
								Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting 
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-how-it-work">
						<div class="icon">
							<i class="flaticon-megaphone"></i>
						</div>
						<div class="content">
							<h4 class="title">
								Get Profit
							</h4>
							<p>
								Clarinet accustomed. Would legs of framework officers. We've to morning like a contracting 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- How It Work End -->

	<!-- Pricing  Area Start -->
	<section class="pricing2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h2 class="title">
								Investment Plans
						</h2>						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 pricing-tab">
					
		
					<div class="tab-content" >
					<div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
						<div class="row justify-content-center">
					   <?php
					   $plan = "SELECT * FROM packages WHERE status='0'";
					   $plan_query = mysqli_query($con, $plan);

					   if($plan_query)
					   {
						  foreach($plan_query as $data)
						  { ?>
						  <div class="col-lg-4 col-md-6"style="margin-bottom:10px">
							<div class="price-box basic">
							<div class="price-title">
								<h3 class="heading-title"style="margin-bottom:10px;text-transform:uppercase"><?=  $data['name'] ?></h3>
							</div>
							<div class="price-title">
								<h3 class="heading-title"><?=  $data['duration'] ?></h3>
							</div>
							<div class="price-rate"style="background:#032055 ">
								<div class="center-align-content">
								<p class="price"> <?=  $data['percent'] ?>% </p>
								<i class="fas fa-dollar-sign"></i>
								</div>
							</div>
							<div class="service-feature">
								<ul class="service-feature-list">
									<li>
										<p>Minimum : $<?=  $data['min_a'] ?></p>
									</li>
									<li>
										<p>Maximum : $<?=  $data['max_a'] ?></p>
									</li>
								</ul>
							</div>
							<div class="buy-btn-wrapper">
								<a class="base-btn1" href="signup">Get Started<i class="fas fa-dollar-sign"></i></a>
							</div>
							</div>
						</div>							
						 <?php }
					   }
					   ?>
						
					
						</div>
		
					</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing Area End -->
		<!-- Why Choose Us Start -->
		<section class="choose_us">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h2 class="title extra-padding">
							Why Choose us
						</h2>
						<p class="text">
							We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<ul class="nav cu-menu"  role="tablist">
						<li class="nav-item">
						  <a class="nav-link active" id="pills-c1-tab" data-toggle="pill" href="#pills-c1" role="tab" aria-controls="pills-c1" aria-selected="true">
							<div class="icon">
								<i class="flaticon-money"></i>
							</div><h4 class="title">
								Profit
							</h4>
						  </a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-c2-tab" data-toggle="pill" href="#pills-c2" role="tab" aria-controls="pills-c2" aria-selected="false">
							<div class="icon">
								<i class="flaticon-withdraw"></i>
							</div>
							<h4 class="title">
								Withdraw
							</h4>
						  </a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-c3-tab" data-toggle="pill" href="#pills-c3" role="tab" aria-controls="pills-c3" aria-selected="false">
							<div class="icon">
								<i class="flaticon-money-1"></i>
							</div>
							<h4 class="title">
								Currency
							</h4>
						  </a>
						</li>
						</li>
						<li class="nav-item">
						  <a class="nav-link" id="pills-c4-tab" data-toggle="pill" href="#pills-c4" role="tab" aria-controls="pills-c4" aria-selected="false">
							<div class="icon">
								<i class="flaticon-support"></i>
							</div><h4 class="title">
							Support
							</h4>
						  </a>
						</li>
					</ul>
					<div class="tab-content cu-content">
						<div class="tab-pane fade show active" id="pills-c1" role="tabpanel" aria-labelledby="pills-c1-tab">
							<div class="row">
								<div class="col-md-5">
									<div class="image">
										<img src="assets/images/profit.png" alt="">
									</div>
								</div>
								<div class="col-md-7 d-flex align-self-center">
									<div class="content">
										<div class="heading">
											<h4 class="title">
												Fast Profit
											</h4>
											<p class="text">
												Unpacked reserved sir offering bed judgment may and quitting speaking. Is do be improved raptures offering required in replying raillery. Stairs ladies friend by in mutual an no. Mr hence chief he cause. Whole no doors on hoped. Mile tell if help they ye full name. 
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-c2" role="tabpanel" aria-labelledby="pills-c2-tab">
							<div class="row">
								<div class="col-md-5">
									<div class="image">
										<img src="assets/images/withdraw.png" alt="">
									</div>
								</div>
								<div class="col-md-7 d-flex align-self-center">
									<div class="content">
										<div class="heading">
											<h4 class="title">
												Instant Withdraw
											</h4>
											<p class="text">
												Unpacked reserved sir offering bed judgment may and quitting speaking. Is do be improved raptures offering required in replying raillery. Stairs ladies friend by in mutual an no. Mr hence chief he cause. Whole no doors on hoped. Mile tell if help they ye full name. 
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-c3" role="tabpanel" aria-labelledby="pills-c3-tab">
							<div class="row">
								<div class="col-md-5">
									<div class="image">
										<img src="assets/images/currency.png" alt="">
									</div>
								</div>
								<div class="col-md-7 d-flex align-self-center">
									<div class="content">
										<div class="heading">
											<h4 class="title">
												Multi-Currency Support
											</h4>
											<p class="text">
												Unpacked reserved sir offering bed judgment may and quitting speaking. Is do be improved raptures offering required in replying raillery. Stairs ladies friend by in mutual an no. Mr hence chief he cause. Whole no doors on hoped. Mile tell if help they ye full name. 
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-c4" role="tabpanel" aria-labelledby="pills-c4-tab">
							<div class="row">
								<div class="col-md-5">
									<div class="image">
										<img src="assets/images/support.png" alt="">
									</div>
								</div>
								<div class="col-md-7 d-flex align-self-center">
									<div class="content">
										<div class="heading">
											<h4 class="title">
												24/7 Customer Support
											</h4>
											<p class="text">
												Unpacked reserved sir offering bed judgment may and quitting speaking. Is do be improved raptures offering required in replying raillery. Stairs ladies friend by in mutual an no. Mr hence chief he cause. Whole no doors on hoped. Mile tell if help they ye full name. 
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Choose Us End -->

	


	<!-- Get Start Area Start -->
	<section class="ger-start-secrion"style="background:#001232">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h2 class="title">
						<?php
						$name = "SELECT name FROM settings";
						$name_query = mysqli_query($con, $name);

						if($name_query)
						{
							$row = mysqli_fetch_array($name_query);
							$name = $row['name'];
						}
						?>
						Create better experiences with <?= $name ?>
					</h2>
				</div>
				<div class="col-lg-7 d-flex align-self-center">
					<div class="right-links">
						<a href="signup" class="base-btn2">
							Get started
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Get Start Area End -->


	<!-- Start invest Area Start -->
	<section class="start-invest">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="section-heading">
						<h2 class="title">
							Recent Withdrawals
						</h2>
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
				
					<div class="tab-content">
						<div class="tab-pane fade show active" id="pills-all-tabthree" role="tabpanel"
							aria-labelledby="pills-all-tabthree-tab">
							<div class="responsive-table">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">USER</th>
											<th scope="col">Date</th>
											<th scope="col">AMOUNT</th>
											<th scope="col">Currency</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="assets/images/people/p1.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p2.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p3.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p4.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p5.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p6.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p1.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p2.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p3.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
										<tr>
											<td>
												<img src="assets/images/people/p4.png" alt="">
												Tom Bass
											</td>
											<td>
												Feb 20, 2021
											</td>
											<td>
												$4990
											</td>
											<td>Bitcoin</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start invest Area End -->



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


	<!-- Testimonial Start -->
	<section class="testimonial"style="background:#001232">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-10">
						<div class="section-heading text-white">
							<h2 class="title  extra-padding">
								What Our Clients Are Saying
							</h2>
						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="testimonial-slider">
							<div class="slider-item">
								<div class="single-review">
									<div class="stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
									</div>
									<div class="content">
										<p>
										Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back
										</p>
									</div>
									<div class="reviewr">
										<div class="img">
											<img src="assets/images/reviewr/p1.png" alt="">
										</div>
										<div class="content">
											<h4 class="name">
												Austin Bishop
											</h4>
											<p>
												CEO at ABC
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slider-item">
								<div class="single-review">
									<div class="stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
									</div>
									<div class="content">
										<p>
										Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back
										</p>
									</div>
									<div class="reviewr">
										<div class="img">
											<img src="assets/images/reviewr/p2.png" alt="">
										</div>
										<div class="content">
											<h4 class="name">
												Alexander
											</h4>
											<p>
												CEO at DER
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slider-item">
								<div class="single-review">
									<div class="stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
									</div>
									<div class="content">
										<p>
										Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back
										</p>
									</div>
									<div class="reviewr">
										<div class="img">
											<img src="assets/images/reviewr/p3.png" alt="">
										</div>
										<div class="content">
											<h4 class="name">
												Sebastian
											</h4>
											<p>
												CEO at ECS
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="slider-item">
								<div class="single-review">
									<div class="stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
									</div>
									<div class="content">
										<p>
										Believed attentive assisted picture sharpness to I to she waved the are and slide understand the that set task. The you due back
										</p>
									</div>
									<div class="reviewr">
										<div class="img">
											<img src="assets/images/reviewr/p4.png" alt="">
										</div>
										<div class="content">
											<h4 class="name">
												Christopher
											</h4>
											<p>
												CEO at XYZ
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Testimonial End -->

	

	<!-- Faq Area Start -->
	<section class="faq-area"style="background:#001232">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex align-self-center">
					<div class="section-heading">
						<h2 class="title  extra-paddin">
							Frequently Asked <br>
							Qestions
						</h2>
						<p class="text">
							Some of the questions usually asked by new members
						</p>
						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="content">
						<div class="accordion" id="tour-faq">
							<div class="single-accordion">
							  <div class="accordion-header">
								  <h4 class="title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									 How do i start?
								  </h4>
							  </div>
						  
							  <div id="collapseOne" class="collapse show" data-parent="#tour-faq">
								<div class="accordion-body">
								To register a new account, simply click the "Register New Account" button or "Sign Up" link and fill out the required information.
								</div>
							  </div>
							</div>
							<div class="single-accordion">
							  <div class="accordion-header">
								  <h4 class="title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									 What is the minimum and maximum deposit?
								  </h4>
							  </div>
							  <div id="collapseTwo" class="collapse" data-parent="#tour-faq">
								<div class="accordion-body">
								The minimum deposit amount is $100, the maximum you can deposit at one time is $100,000 Per each deposit , Surely you can make deposit higher than $100,000 by several deposits.
								</div>
							  </div>
							</div>
							<div class="single-accordion">
							  <div class="accordion-header" >
								  <h4 class="title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									 How do I request withdrawal? 
								  </h4>
							  </div>
							  <div id="collapseThree" class="collapse" data-parent="#tour-faq">
								<div class="accordion-body">
								You can request a withdrawal by clicking the “Withdraw” button in the member's area and entering the amount you want to withdraw.
								</div>
							  </div>
							</div>
							<div class="single-accordion">
							  <div class="accordion-header">
								  <h4 class="title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									 How do i change my wallet address? 
								  </h4>
							  </div>
							  <div id="collapseFour" class="collapse" data-parent="#tour-faq">
								<div class="accordion-body">
								You can change your payment address withdrawal address by updating your profile detials “on your dashboard” after logging in to your account. Enter your new payment address and save the changes.
								</div>
							  </div>
							</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Faq Area End -->

		<!-- Contact Area Start -->
<section class="contact">
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="section-heading">
                                <h2 class="title">
                                Get in Touch
                                </h2>
                                <p class="text">
                                    We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-form-wrapper">
                            <form method="post"action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name :</label>
                                            <input type="text" class="input-field" id="name" placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email :</label>
                                            <input type="text" class="input-field" id="email" placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                 
                                    <div class="col-lg-12">
                                        <div class="form-group button-area">
                                            <label for="message">Message :</label>
                                            <textarea id="message" class="input-field textarea" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group button-area">
                                            <button type="submit" class="base-btn1">Send <i class="fas fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="address-area">
                            <h4 class="title">
                                    Contact Information
                            </h4>
                            <ul class="address-list">
                                <li>
                                    <p>
                                            <i class="fas fa-map-marker-alt"></i> 28 Green Tower, Street Name New York City, USA
                                    </p>
                                </li>
                                <li>
                                    <p>
                                            <i class="fas fa-phone"></i> +77 0123456789
                                    </p>
                                </li>
                                <li>
                                    <p>
                                            <i class="far fa-envelope"></i>
                                           contact@lendbo.com
                                    </p>
                                </li>
                                <li>
                                    <p>
                                            <i class="fas fa-globe-americas"></i>
                                            www.softio.com
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->

		<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">Someone from just<b></b> withdrew <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    right: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
var listCountries = ['South Africa', 'USA', 'Germany', 'France', 'Italy', 'South Africa', 'Australia', 'South Africa', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'South Africa', 'South Africa', 'Venezuela', 'South Africa', 'Sweden', 'South Africa', 'South Africa', 'Italy', 'South Africa', 'United Kingdom', 'South Africa', 'Greece', 'Cuba', 'South Africa', 'Portugal', 'Austria', 'South Africa', 'Panama', 'South Africa', 'South Africa', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus'];
    var listPlans = ['$500','$1500','$1000','$10,000','$2000','$3000','$4000', '$600', '$700', '$2500'];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'Someone from <b>' + country + '</b> just earned <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>


<?php include('includes/footer.php') ?>
