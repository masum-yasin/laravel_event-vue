
    <script setup>
           import NavBarLayout from '@/Layouts/NavBarLayout.vue';
    </script>


<template>
    <NavBarLayout>
<div>
    <section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Contact Us</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Contact Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Get in <span class="alternate">Touch</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, velit.</p>
				</div>
			</div>
		</div>
		<form action="#" class="row">
			<div class="col-md-6">
				<input type="text" class="form-control main" name="name" id="name" placeholder="Name">
			</div>
			<div class="col-md-6">
				<input type="email" class="form-control main" name="email" id="email" placeholder="Email">
			</div>
			<div class="col-md-12">
				<input type="text" class="form-control main" name="phone" id="phone" placeholder="Phone">
			</div>
			<div class="col-md-12">
				<textarea name="message" id="message" class="form-control main" rows="10" placeholder="Your Message"></textarea>
			</div>
			<div class="col-12 text-center">
				<button type="submit" class="btn btn-main-md">Send Message</button>
			</div>
		</form>
	</div>
</section>

<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="frontend/images/icon/marker.png" data-marker-name="Eventre"></div>
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
</div>
</NavBarLayout>
</template>


