<div class="content-container unit size3of4 lastUnit">
	<!-- Carousel -->
	<!-- Contents and images are temporarily put as placeholders for testing purpose -->
	<div class="homepage_carousel">
		<% loop $CarouselSlides %>
		<div>
			<div class="line">
				<div class="unit size1of2">
					<h3>$Title</h3>
					<p>$Caption</p>
				</div>
				<div class="unit size1of2 lastUnit slideimage_container">
					$SlideImage</div>
			</div>
			<div class="line">
				<div class="unit size1of1 carousel_join_us_button">
					<a class="btn" href="$Top.CarouselButtonLink">Join us!</a>
				</div>
			</div>
		</div>
		<% end_loop %>
	</div>
	<!-- end Carousel -->
	<div>$Content</div>
</div>