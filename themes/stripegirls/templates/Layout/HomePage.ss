<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	
	<h1>$Title</h1>
	<!-- Carousel --> <!-- Contents and images are temporarily put as placeholders for testing purpose -->
	<div class="homepage_carousel">
		<% loop $CarouselSlides %>
	    <div class="line">
			<div class="unit size1of2">
				<h3>$Title</h3>
				<p>$Caption</p>
		        <p><button>Join Us</button></p>
			</div>
			<div class="unit size1of2 lastUnit slideimage_container">
				$SlideImage
			</div>
	    </div>
	    <% end_loop %>    
    </div>
    <!-- end Carousel -->
    <div>
    	$Content
    </div>
</div>