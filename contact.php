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
						Contact
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
							<a href="contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

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






<?php  include('includes/footer.php'); ?>