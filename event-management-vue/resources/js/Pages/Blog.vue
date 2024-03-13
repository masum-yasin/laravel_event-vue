

    <script setup>
    import NavBarLayout from '@/Layouts/NavBarLayout.vue';

    </script>

<template>
   <NavBarLayout>
    <section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Our Gallery</h3>
				</div>
				<ol class="breadcrumb justify-content-center p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Our Gallery</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->



<!--=============================
=            Gallery            =
==============================-->

<section class="section gallery">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="controls">
					<div class="btn-group btn-group-toggle d-block" data-toggle="buttons">
						<label class="btn active">
							<input type="radio" name="gallery-filter" value="all" checked="checked" />All
						</label>
						<label class="btn">
							<input type="radio" name="gallery-filter" value="conference" />Conference
						</label>
						<label class="btn">
							<input type="radio" name="gallery-filter" value="meeting" />Meeting
						</label>
						<label class="btn">
							<input type="radio" name="gallery-filter" value="events" />Events
						</label>
						<label class="btn">
							<input type="radio" name="gallery-filter" value="party" />Party
						</label>
						<label class="btn">
							<input type="radio" name="gallery-filter" value="concert" />Concert
						</label>
					</div>
				</div>
				<div class="gallery-wrapper row less-gutter">
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;meeting&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-one.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-one.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;party&quot;,&quot;events&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-two.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-two.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;meeting&quot;,&quot;party&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-three.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-three.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;conference&quot;,&quot;concert&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-four.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-four.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;concert&quot;,&quot;party&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-five.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-five.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;events&quot;,&quot;conference&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-six.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-six.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;meeting&quot;,&quot;events&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-seven.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-seven.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-item col-lg-3 col-md-6" data-groups="[&quot;concert&quot;,&quot;conference&quot;]">
						<div class="image-block">
							<div class="image">
								<img src="frontend/images/gallery/gallery-less-eight.jpg" alt="gallery-image" class="img-fluid">
								<div class="primary-overlay">
									<a class="image-popup" data-effect="mfp-with-zoom" href="frontend/images/gallery/gallery-popup-eight.jpg"><i
											class="fa fa-picture-o"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Gallery  ====-->

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
   </NavBarLayout>
</template>


