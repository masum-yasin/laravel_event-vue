
<script setup>
     import NavBarLayout from '@/Layouts/NavBarLayout.vue';
</script>


<template>
    <NavBarLayout>
<!--================================
=            News Posts            =
=================================-->

<section class="news section">
	<div class="container">
		<div class="row mt-30">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="block">
					<!-- Article -->
					<article class="blog-post single">
						<div class="post-thumb">
							<img src="/frontend/images/news/single-post.jpg" alt="post-image" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="date">
								<h4>20<span>May</span></h4>
							</div>
							<div class="post-title">
								<h3>Elementum purus id ultrices.</h3>
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
					</article>
					<!-- Comment Section -->
				
					<div class="comment-form">
						<h5>Booking Now</h5>
						<form action="#" class="row">
							
							<div class="col-md-6">
								<input type="text" class="form-control main" name="customer_name" id="name" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control main" name="email" id="email" placeholder="Your Email">
							</div>
							<div class="col-md-6">
								<input type="number" class="form-control main" name="phone_number" id="phone" placeholder="Your Phone">
							</div>
                                        <!-- {/* get customer id  */}
                        <input type="hidden" name="customer_id" defaultValue={user.id} />
                        {/* get Eventtype id  */}
                        <input type="hidden" name="eventtype_id" defaultValue={ eventtype.id } /> -->
						
							<div class="col-md-6">
								<input type="text" class="form-control main" name="person" id="person" placeholder="Person Number">
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control main" name="booking_price" id="person" placeholder="Booking Price 50% only">
							</div>
							
                            <div class="col-md-6">
								<input type="text" class="form-control main" name="price" id="price" placeholder="Booking Price">
							</div>
                            <div class="col-md-6">
								
							</div>
							
                            <div class="col-12">
								<textarea class="form-control main" name="description" id="comment" rows="2" placeholder="Your Description"></textarea>
							</div>
                            <div class="col-12">
								<textarea class="form-control main" name="description" id="description" rows="2" placeholder="Your Address"></textarea>
							</div>
							<div class="col-12">
								<button class="btn btn-main-md" type="submit">Submit Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-10 mx-auto">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control main m-0" id="expire" placeholder="Search...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Categories</h5>
						<ul class="category-list m-0 p-0">
							<li><a href="">Strategy Planning <span class="float-right">(6)</span></a></li>
							<li><a href="">Corporate Identity <span class="float-right">(9)</span></a></li>
							<li><a href="">Brand Creation<span class="float-right">(3)</span></a></li>
							<li><a href="">Entertainment<span class="float-right">(5)</span></a></li>
							<li><a href="">Conference<span class="float-right">(7)</span></a></li>
						</ul>
					</div>
					<!-- Latest post -->
					<div class="widget latest-post">
						<h5 class="widget-header">Latest Post</h5>
						<!-- Post -->
						<div class="media">
							<img src="/frontend/images/news/post-thumb-sm-one.jpg" class="img-fluid" alt="post-thumb">
							<div class="media-body">
								<h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
								<p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
							</div>
						</div>
						<!-- Post -->
						<div class="media">
							<img src="/frontend/images/news/post-thumb-sm-two.jpg" class="img-fluid" alt="post-thumb">
							<div class="media-body">
								<h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
								<p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
							</div>
						</div>
						<!-- Post -->
						<div class="media">
							<img src="/frontend/images/news/post-thumb-sm-three.jpg" class="img-fluid" alt="post-thumb">
							<div class="media-body">
								<h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
								<p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
							</div>
						</div>
						<!-- Post -->
						<div class="media">
							<img src="/frontend/images/news/post-thumb-sm-four.jpg" class="img-fluid" alt="post-thumb">
							<div class="media-body">
								<h6><a href="">Nam hendrerit eros in ligula suscipit suscipit</a></h6>
								<p href="#"><span class="fa fa-calendar"></span>02 Feb, 2017</p>
							</div>
						</div>
					</div>
					<!-- Popular Tag Widget -->
					<div class="widget tags">
						<!-- Widget Header -->
						<h5 class="widget-header">Popular Tags</h5>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#">Culture</a></li>
							<li class="list-inline-item"><a href="#">Social</a></li>
							<li class="list-inline-item"><a href="#">News</a></li>
							<li class="list-inline-item"><a href="#">Events</a></li>
							<li class="list-inline-item"><a href="#">Sports</a></li>
							<li class="list-inline-item"><a href="#">Music</a></li>
						</ul>
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

    </NavBarLayout>
</template>



