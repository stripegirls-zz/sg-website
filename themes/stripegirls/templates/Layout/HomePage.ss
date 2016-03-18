<div class="content-container" style="padding-top: 0; padding-bottom:0;">
	<!-- Carousel -->
	<div class="homepage_carousel">
		<% loop $CarouselSlides %>
		<div>
			<div class="slideimage_container" style="background-image: url('$SlideImage.URL');">
				<div style="background-color: rgba(0, 0, 0, 0.5);height: 100%">
				<div class="slider_text">
					<h3>$Title</h3>
					<p>$Caption</p>
				</div>
				</div>
			</div>
		</div>
		<% end_loop %>
	</div>
	<!-- end Carousel -->
	
	<div class="carousel_button_container">
		<div class="carousel_join_us_button">
			<a class="btn" href="$Top.CarouselButtonLink">Join us!</a>
		</div>
	</div>
	
	<% if Content %>
		<div>$Content</div>
	<% end_if %>
</div>