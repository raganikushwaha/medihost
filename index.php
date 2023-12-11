<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href ="asset/css/style.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="asset/css/owl.carousel.min.css">

		<title>MediHost</title>

		 
  	</head>


  	<body>
	    <!-- header -->
		<div class="navbar navigation-wrap">
    		<a href="#" class="logo">Logo</a>

			<div class="menu">
				<ul class="nav-list">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
					<li class="nav-item"><a class="nav-link" href="#doctors">Our Doctors</a></li>
					<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">Hospitals</a></li>
					<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
				</ul>
			</div>
    		<button class="button">Contact</button>
    		<button class="navbar-toggler" onclick="toggleMenu()">☰</button>
		</div>

		<script>
			function toggleMenu() {
				const navbar = document.querySelector('.navbar');
				navbar.classList.toggle('active');
			}
		</script>


		<!-- <header>
			<nav class="navbar navbar-expand-lg navigation-wrap">
				<div class="container">
					<a class="navbar-brand" href="#"><img src="images/logo.jpg"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
					aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-stream navbar-toggler-icon"></i></button>
					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
							<li class="nav-item"><a class="nav-link" href="#doctors">Our Doctors</a></li>
							<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="#about">Hospitals</a></li>					 
						</ul>
						<button class="main-btn">Contact</button>
					</div>
				</div>
			</nav>
		</header> -->

		<!-- section-1 top-banner -->
			 
		<section id="home"> 
			<div class="topbanner"></div>
			<div class="topbannercontent">
				<h1 class="text-white">We are ready <br>to help health <br> problem.</h1>
				<p class="text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  <br>Etiam et purus a odio  finibus bibendum amet leo.</p>
				<div class="mt-5">
					<button class="banner-btn">Get free consultation   <i class="fa-solid fa-arrow-left ps-2"></i>  </button>
				</div>
		    </div>  	 
		</section>



		<!-- about section -->
		<section id="about">
			<div class="we-help-section">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-7 mb-5 mb-lg-0">
							<div class="imgs-grid">
								<div class="grid grid-1"><img src="asset/img/banner.jpg" alt="Untree.co"></div>
								
								<div class="grid grid-2"><img src=" asset/img/hero-fullscreen-bg.jpg" alt="Untree.co"></div>
							</div>
						</div>
			
						<div class="col-lg-5 ps-lg-5 about-content">
							<h3 class="section-title mb-4">About Us</h3>
							<h2 class="section-title mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident soluta voluptate tenetur cum, natus rem praesentium autem rerum sunt a sint. Nihil voluptates, saepe voluptatum amet eligendi ut. Officiis, repudiandae.</p>

							<ul class="list-unstyled custom-list my-4">
								<li>Lorem ipsum dolor sit</li>
								<li>Lorem ipsum dolor sit</li>
								<li>Lorem ipsum dolor sit</li>
								<li>Lorem ipsum dolor sit</li>
								<li>Lorem ipsum dolor sit</li>					 
							</ul>
							<button class="aboutbtn">Discover More</button>
						</div>
					</div>
				</div>
			</div>
		</section> 

		<!-- section-3 story-->
		<section id="doctors">
			<div class="story-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="text-content">
								<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h2>
								<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio
								finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio
								finibus bibendum in sit amet leo. Mauris feugiat erat tellus.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio
								finibus bibendum in sit amet leo. Mauris feugiat erat tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio
								finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
								<button class="storybtn mt-3">Discover More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>

		<!-- services -->
		 
		<section id="services">
			<div class="container mb-5">
				<div class="services">
					<div class="row">
						<div class="col-md-12 text-center mt-5"><h6>Services</h6></div>
						<div class="col-sm-12">
							<div class="text-content text-center">
								<h2>Lorem ipsum dolor sit amet.</h2>
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit
								amet leo. Mauris feugiat erat tellus. Far far away, behind the word mountains, far from the countries
								Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
							</div>
						</div>
					</div>
					
					<div class="row mt-5">
						<div class="col-md-3 mb-3">
							<div class="card">
								<div class="cardesign">
									<i class="fa fa-users fa-2x circle-icon" style="color:#ffff";></i>
									<div class="pt-3">
										<h5>Lorem ipsum </h5>
										<p class="mt-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus 
										amet leo.  </p>          
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 mb-3">
							<div class="card">
								<div class="cardesign">
									<i class="fa fa-users fa-2x circle-icon" style="color:#ffff";></i>
									<div class="pt-3">
										<h5>Lorem ipsum </h5>
										<p class="mt-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus 
										amet leo.  </p>          
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="card">
								<div class="cardesign">
									<i class="fa fa-users fa-2x circle-icon" style="color:#ffff";></i>
									<div class="pt-3">
										<h5>Lorem ipsum </h5>
										<p class="mt-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus 
										amet leo.  </p>          
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<div class="card">
								<div class="cardesign">
									<i class="fa fa-users fa-2x circle-icon" style="color:#ffff";></i>
									<div class="pt-3">
										<h5>Lorem ipsum </h5>
										<p class="mt-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus 
										amet leo.  </p>          
									</div>
								</div>
							</div>
						</div>					
				    </div>
				</div>			
			</div>
        </section>

		<!-- blogs -->

		<div class="container-fluid" style="background-color:  #080909; padding:30px;">
			<div class="container">
				<div class="row blogs">
					<div class="col-md-12 text-white"><h6>Blogs</h6></div>
					<div class="col-md-12 text-white"><h2>Our stories</h2></div>
				</div>
				<div class="row mt-3">
				
					<div class="col-md-8 mb-3">
						<div class="img1">
							<div class="imgbtn">
								<button class="img-top-btn" type="submit">Blood</button>
								<button class="img-top-btn" type="submit">Urgent</button>
										
							</div>               
							<div class="img-overlay">
								<h6>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h6>
								<button class="readmore-btn" type="submit">Read more</button>
							</div>                 
												
						</div>                          
					</div>
					<div class="col-md-4">
						<div class="img1" style="background-image: linear-gradient(to top, rgba(0,0,0,1),rgba(0, 0, 0, 0.450)), url(asset/img/banner.jpg);">
							<div class="imgbtn">
							    <button class="img-top-btn" type="submit">Blood</button>
								<button class="img-top-btn" type="submit">Urgent</button>
										
							</div>               
							<div class="img-overlay">
								<h6>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h6>
								<button class="readmore-btn" type="submit">Read more</button>
							</div>                                                      
						</div>            

									
						<div class="img1" style="background-image: linear-gradient(to top, rgba(0,0,0,1),rgba(0, 0, 0, 0.450)), url(asset/img/banner.jpg);">
							<div class="imgbtn">
							    <button class="img-top-btn" type="submit">Blood</button>
								<button class="img-top-btn" type="submit">Urgent</button>
										
							</div>               
							<div class="img-overlay">
								<h6>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h6>
								<button class="readmore-btn" type="submit">Read more</button>
							</div>                 
												
						</div>           
					</div>   
				</div>

				<!-- start secont row -->
				<div class="row mt-2">
					<div class="col-md-4">
						<div class="img1" style="background-image: linear-gradient(to top, rgba(0,0,0,1),rgba(0, 0, 0, 0.450)), url(asset/img/banner.jpg);">
							<div class="imgbtn">
							    <button class="img-top-btn" type="submit">Blood</button>
								<button class="img-top-btn" type="submit">Urgent</button>
										
							</div>               
							<div class="img-overlay">
								<h6>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h6>
								<button class="readmore-btn" type="submit">Read more</button>
							</div>                                                      
						</div>            

					
							
						<div class="img1" style="background-image: linear-gradient(to top, rgba(0,0,0,1),rgba(0, 0, 0, 0.450)), url(asset/img/banner.jpg);">
							<div class="imgbtn">
							    <button class="img-top-btn" type="submit">Blood</button>
								<button class="img-top-btn" type="submit">Urgent</button>
										
							</div>               
							<div class="img-overlay">
								<h6>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h6>
								<button class="readmore-btn" type="submit">Read more</button>
							</div>                 
												
						</div>           
					</div>
					<div class="col-md-8 mb-3">
						<div class="img1">
							<div class="imgbtn">
							    <button class="img-top-btn" type="submit">Blood</button>
								<button class="img-top-btn" type="submit">Urgent</button>
										
							</div>               
							<div class="img-overlay">
								<h6>Lorem, ipsum aperiam rerum odit tenetur nisi inventore, provident aspernatur animi? Odio, qui itaque?</h6>
								<button class="readmore-btn" type="submit">Read more</button>
							</div>                 
												
						</div>                          
					</div>  
				</div>
			</div>     
        </div>

		<!-- testimonials -->
		<section class="mt-5">
			<div class="container">
				<div class="row">
					<div class="slider-text">
						<h6> Testimonials</h6>
						<div class="col-md-4">
							<h1 > Responsive Owl Carousel </h1>
							<p > Lorem ipsum dolor sit amet, consectetur adipisicing elit.  inventore nisi velit minima.</p>			 
						</div>
					</div>
				</div>
			</div>
			<div class="container">			 
				<div class="slider">
					<div class="owl-carousel">

						<div class="slider-card">
							<div class="">
								<img  class="img-fluid" src=" asset/img/hero-fullscreen-bg.jpg" alt="" >
							</div>				
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							
							<div class="star-rating text-center">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa-regular fa-star"></i>
								</ul>
							</div>
							<p class="overview"><b>Michael Holz</b>Seo Analyst </p>						
						</div>

						<div class="slider-card">
							<div class="">
								<img  class="img-fluid" src="asset/img/hero-fullscreen-bg.jpg" alt="" >
							</div>				
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							
							<div class="star-rating text-center">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa-regular fa-star"></i>
								</ul>
							</div>
							<p class="overview"><b>Michael Holz</b>Seo Analyst </p>						
						</div>

						<div class="slider-card">
							<div class="">
								<img  class="img-fluid" src="asset/img/hero-fullscreen-bg.jpg" alt="" >
							</div>				
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							
							<div class="star-rating text-center">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa-regular fa-star"></i>
								</ul>
							</div>
							<p class="overview"><b>Michael Holz</b>Seo Analyst </p>						
						</div>

						<div class="slider-card">
							<div class="">
								<img  class="img-fluid" src="asset/img/hero-fullscreen-bg.jpg" alt="" >
							</div>				
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p>
							
							<div class="star-rating text-center">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa fa-star"></i></li>
									<li class="list-inline-item"><i class="fa-regular fa-star"></i>
								</ul>
							</div>
							<p class="overview"><b>Michael Holz</b>Seo Analyst </p>						
						</div>
						
					</div>
				</div>
		    </div>
        </section>



		<!-- section-8 newslettar-->
		<section id="newslettar">
		    <div class="container-fluid newslettar">
				<div class="row">
					<div class="newsleter">
						<div class="col-md-12 text-center mt-5"><h6>Newsletter</h6></div>
						<div class="sol-sm-12">
							<div class="text-content text-center pb-4">
								<h2>JOIN US</h2>
								<p> Lorem, ipsum dolor sit amet molestias aperiam quo accusamus fuga ducimus. </p>
							</div>
							<form class="newsletter">
								<div class="row">
									<div class="col-md-12">
										<input class="form-control" placeholder="Email Address here" name="email" type="email">					 
										<button class="subscribe-btn" type="submit">Subscribe</button>
									</div>
								</div>						
							</form>
						</div>
					</div>
				</div>
			</div>			
        </section> 
		
		

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container-fluid ">
				<div class="container">
					<div class="row g-5 mb-5">
						<div class="col-lg-2">
							<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Med City<span>.</span></a></div>
							<h3>About us</h3>
							<ul class="list-unstyled">
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
  
						<div class="col-lg-10">
							<div class="row links-wrap">
								<div class="col-6 col-sm-6 col-md-3">
									<h3>About us</h3>
									<ul class="list-unstyled">
										<li><a href="#">About us</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact us</a></li>
									</ul>
								</div>	
							
								<div class="col-6 col-sm-6 col-md-3">
									<h3>features</h3>
									<ul class="list-unstyled">
										<li><a href="#">Support</a></li>
										<li><a href="#">Knowledge base</a></li>
										<li><a href="#">Live chat</a></li>
									</ul>
								</div>
  
								<div class="col-6 col-sm-6 col-md-3">
									<h3>About us</h3>
									<ul class="list-unstyled">
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Our team</a></li>
										<li><a href="#">Leadership</a></li>
										<li><a href="#">Privacy Policy</a></li>
									</ul>
								</div>
	
								<div class="col-6 col-sm-6 col-md-3">
									<h3>Get in touch</h3>
									<ul class="list-unstyled">
										<li><i class="fa fa-phone"></i><a href="#"> 1234567890</a></li>
										<li><i class="fa fa-location"></i><a href="#">Lucknow</a></li>
										<li><i class="fa fa-envelope"></i><a href="#">medcity@gmail.com</a></li>
									</ul>
								</div>
							</div>			
              			</div>
            		</div> 
          		</div>         
        	</div>
			<div class="container-fluid">
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright All Rights Reserved.</p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled custom-social">
								<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
								<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
								<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>					
							</ul>
						</div>
					</div>
				</div>
			</div>
  		</footer>
		<!-- End Footer Section -->	

		
		

		<!--  js -->

		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

		<script src="asset/js/owl.carousel.min.js"></script>
	    <script src="asset/js/script.js"></script>

		 
  	</body>
</html>