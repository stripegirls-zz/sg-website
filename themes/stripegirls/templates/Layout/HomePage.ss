<div class="content-container unit size3of4 lastUnit">
	<!-- Carousel -->
	<div class="homepage_carousel">
		<% loop $CarouselSlides %>
		<div>
			<div class="line">
				<div class="unit size1of2" style="padding: 10% 5% 10% 0">
					<div>
					<h3>$Title</h3>
					<p>$Caption</p>
					</div>
				</div>
				<div class="unit size1of2 lastUnit slideimage_container"
					 style="background-image: url('$SlideImage.URL');">
				</div>
			</div>
		</div>
		<% end_loop %>
	</div>
	<!-- end Carousel -->
	
	<div class="line">
		<div class="unit size1of1 carousel_join_us_button">
			<a class="btn" href="$Top.CarouselButtonLink">Join us!</a>
		</div>
	</div>
	
	<% if Content %>
		<div>$Content</div>
	<% end_if %>
</div>