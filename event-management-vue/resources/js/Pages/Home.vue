<script setup>
    import NavBarLayout from '@/Layouts/NavBarLayout.vue';
import { usePage } from '@inertiajs/vue3';

	const { eventtype,categories, user, token} = usePage().props
    console.log(eventtype);
// const CategoryName = (id)=>{
//   const category = categories.find(category =>category.id===id);
//   return category ? category.name :"unknow category";
// }
	
</script>

<template>
    <NavBarLayout>
<!--============================
=            Banner            =
=============================-->

<section class="banner bg-banner-one overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Content Block -->
				<div class="block">
					<!-- Coundown Timer -->
					<div class="timer"></div>
					<h1>Business</h1>
					<h2>Conference 2024</h2>
					<h6>02-05 March 2024 California</h6>
					<!-- Action Button -->
					<a href="contact.html" class="btn btn-white-md">get ticket now</a>
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--====  End of Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="/frontend/images/speakers/featured-speaker.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2>About The <span class="alternate">Eventre</span></h2>
					<div class="description-one">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
						</p>
					</div>
					<div class="description-two">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
					</div>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="#" class="btn btn-main-md">Buy ticket</a>
						</li>
						<li class="list-inline-item">
							<a href="#" class="btn btn-transparent-md">Read more</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Speakers            =
===============================-->

<section class="section speakers bg-speaker overlay-lighter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3>Who <span class="alternate">Speaking?</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-one.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 2 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-two.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 3 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-three.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 4 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-four.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 5 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-five.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-six.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 7 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-five.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 8 -->
				<div class="speaker-item">
					<div class="image">
						<img src="/frontend/images/speakers/speaker-six.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="single-speaker.html">Johnathan Franco</a></h5>
						<p>Project Manager</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Speakers  ====-->

<!--==============================
=            Schedule            =
===============================-->

<section class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Event <span class="alternate">Schedule</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
					  <li class="nav-item">
					    <a class="nav-link active" href="#nov20" data-toggle="pill">
					    	Day-01
					    	<span>20 November 2017</span>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov21" data-toggle="pill">
							Day-02
					    	<span>21 November 2017</span>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov22" data-toggle="pill">
							Day-03
					    	<span>22 November 2017</span>
					    </a>
					  </li>
					</ul>
				</div>
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active schedule-item" id="nov20">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Time</div>
					  			<div class="speaker">Speaker</div>
					  			<div class="subject">Subject</div>
					  			<div class="venue">Venue</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">9.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">Samanta Doe</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium A</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">10.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">Zerad Pawel</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Principle of Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium B</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">12.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">Henry Mong</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Wp Requirements</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium C</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">2.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">Baily Leo</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium D</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">Lee Mun</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">Lee Mun</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov21">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Time</div>
					  			<div class="speaker">Speaker</div>
					  			<div class="subject">Subject</div>
					  			<div class="venue">Venue</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">9.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">Samanta Doe</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium A</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">10.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">Zerad Pawel</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Principle of Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium B</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">12.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">Henry Mong</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Wp Requirements</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium C</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">2.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">Baily Leo</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium D</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">Lee Mun</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">Lee Mun</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov22">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Time</div>
					  			<div class="speaker">Speaker</div>
					  			<div class="subject">Subject</div>
					  			<div class="venue">Venue</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">9.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">Samanta Doe</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium A</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">10.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">Zerad Pawel</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Principle of Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium B</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">12.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">Henry Mong</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Wp Requirements</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium C</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">2.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">Baily Leo</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium D</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">Lee Mun</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<div class="speaker">
							  			<img src="/frontend/images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">Lee Mun</span>
							  		</div>
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--====  End of Schedule  ====-->

<!--==================================
=            Registration            =
===================================-->

<section class="registration">
	<div class="container-fuild p-0">
		<div class="row">
			<div class="col-lg-6 col-md-12 p-0">
				<div class="service-block bg-service overlay-primary text-center">
					<div class="row no-gutters">
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-microphone"></i>
								<h5>8 Speakers</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-flag"></i>
								<h5>500 + Seats</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-ticket"></i>
								<h5>300 tickets</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-calendar"></i>
								<h5>3 days event</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 p-0">
				<div class="registration-block bg-registration overlay-dark">
					<div class="block">
						<div class="title text-left">
							<h3>Register to <span class="alternate">Eventre</span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<form action="#" class="row">
							<div class="col-md-6">
								<input type="text" class="form-control main" placeholder="Your Name" required>
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control main" placeholder="Email" required>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control main" placeholder="Phone" required>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control main" id="select-ticket" required>
								      <option>Ticket Type</option>
								      <option>1</option>
								      <option>2</option>
								      <option>3</option>
								      <option>4</option>
								      <option>5</option>
								    </select>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-white-md">Register Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Registration  ====-->


<!--===================================
=            Pricing Table            =
====================================-->

<section class="section pricing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Booking<span class="alternate">Now</span></h3>
					
				</div>
			</div>
		</div>
<!-- Looping Eventtyp -->

		<div class="row">
			<div v-for="item in eventtype" class="col-lg-4 col-md-6">
				<!-- Pricing Item -->
				<div class="pricing-item">
					<div class="pricing-heading">
						<!-- Title -->
						
						<!-- Price -->
						<div class="price">
							<div class="image">
						<img  v-bind:src="'uploads/'+ item.image" alt="speaker" class="img-fluid">
						</div>
						<h5 className="text-center mt-3">{{ item.event_name }}</h5>
							<h6 class="text-center">{{item.price}}<span>$</span></h6>
							
						</div>
						
					</div>
					
					<div class="pricing-footer text-center mt-5">
						<button className='btn btn-2 btn-warning'><a :href="route('frontend.eventbooking',{id:item.id})">Book Now</a></button>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</section>

<!--====  End of Pricing Table  ====-->


<!--===========================================
=            Call to Action Ticket            =
============================================-->

<section class="cta-ticket bg-ticket overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Get ticket info -->
				<div class="content-block">
					<h2>Get Ticket <span class="alternate">Now!</span></h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmtempor incidi</p>
					<a href="" class="btn btn-main-md">Buy ticket</a>
				</div>
			</div>
		</div>
	</div>
	<div class="image-block"><img src="/frontend/images/speakers/speaker-ticket.png" alt="" class="img-fluid"></div>
</section>

<!--====  End of Call to Action Ticket  ====-->

<!--==============================
=            Sponsors            =
===============================-->

<section class="sponsors section bg-sponsors overlay-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Our <span class="alternate">Sponsors</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore dolore</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>Platinum Sponsors</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/pt-spon-two.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/pt-spon-two.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/pt-spon-three.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/pt-spon-four.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>Gold Sponsors</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/gl-spon-one.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/gl-spon-two.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="/frontend/images/sponsors/gl-spon-three.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="sponsor-btn text-center">
					<a href="#" class="btn btn-main-md">Become a sponsor</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sponsors  ====-->

<!--================================
=            News Posts            =
=================================-->

<section class="news section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Eventre <span class="alternate">News</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore dolore</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
				<div class="blog-post">
					<div class="post-thumb">
						<a href="news-single.html">
							<img src="/frontend/images/news/post-thumb-one.jpg" alt="post-image" class="img-fluid">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<h4>20<span>May</span></h4>
						</div>
						<div class="post-title">
							<h2><a href="news-single.html">Elementum purus id ultrices.</a></h2>
						</div>
						<div class="post-meta">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fa fa-user-o"></i>
									<a href="#">Admin</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-heart-o"></i>
									<a href="#">350</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-comments-o"></i>
									<a href="#">30</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-8 col-10 m-auto">
				<div class="blog-post">
					<div class="post-thumb">
						<a href="news-single.html">
							<img src="/frontend/images/news/post-thumb-two.jpg" alt="post-image" class="img-fluid">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<h4>20<span>May</span></h4>
						</div>
						<div class="post-title">
							<h2><a href="news-single.html">Elementum purus id ultrices.</a></h2>
						</div>
						<div class="post-meta">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fa fa-user-o"></i>
									<a href="#">Admin</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-heart-o"></i>
									<a href="#">350</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-comments-o"></i>
									<a href="#">30</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 m-md-auto col-sm-8 col-10 m-auto">
				<div class="blog-post">
					<div class="post-thumb">
						<a href="news-single.html">
							<img src="/frontend/images/news/post-thumb-three.jpg" alt="post-image" class="img-fluid">
						</a>
					</div>
					<div class="post-content">
						<div class="date">
							<h4>20<span>May</span></h4>
						</div>
						<div class="post-title">
							<h2><a href="news-single.html">Elementum purus id ultrices.</a></h2>
						</div>
						<div class="post-meta">
							<ul class="list-inline">
								<li class="list-inline-item">
									<i class="fa fa-user-o"></i>
									<a href="#">Admin</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-heart-o"></i>
									<a href="#">350</a>
								</li>
								<li class="list-inline-item">
									<i class="fa fa-comments-o"></i>
									<a href="#">30</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of News Posts  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/icon/marker.png" data-marker-name="Eventre"></div>
	<div class="address-block">
		<h4>Docklands Convention</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>Street Address, Location, <br>City, Country.</span></li>
			<li><i class="fa fa-phone"></i><span>[00] 000 000 000</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>
<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <div class="footer-logo">
            <img src="/frontend/images/footer-logo.png" alt="logo" class="img-fluid">
          </div>
          <ul class="social-links-footer list-inline">
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-rss"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-vimeo"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="index.html">Eventre</a> &copy; 2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>
</NavBarLayout>
</template>
<style>
	.price h5{
		color:rgb(201, 147, 12);
		}
		.price h6{
			color:rgb(201, 147, 12)
		}
						</style>