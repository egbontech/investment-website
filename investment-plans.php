<?php
session_start(); 
include('includes/header.php');
include('includes/navbar.php');


?>

	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="title">
						Investment
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
							<a href="investment-plans">Investment</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

		
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


	<?php  include('includes/footer.php'); ?>