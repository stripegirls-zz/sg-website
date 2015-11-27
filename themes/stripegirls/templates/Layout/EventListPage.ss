<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div id="past-events-section">
		<h2>Past Events</h2>
			<% loop $PastEvents %>
				<div class="event-item">
					<h3><a href="$Link">$Title</a></h3>
					<div class="image">
						$Photo.CroppedImage(242,156)
					</div>
					<div class="event-summary">
						$Description
						<a href="$Link">Read More about $Title</a>
						<ul>
						<li>Where: $Venue</li>
						<li>When: $StartDateTime.Nice - $EndDateTime.Nice</li>
						<li>Price: $Price</li>
						</ul>	
					</div>
				</div>
				<% if not $Last %>
					<hr>
				<% end_if %>
			<% end_loop %>			
		</div><!-- end Past Events Section -->
		<div id="future-events-section">
		<h2>Upcoming Events</h2>
			<% loop $UpcomingEvents %>
					<div class="event-item">
						<h3><a href="$Link">$Title</a></h3>
						<div class="image">
							$Photo.CroppedImage(242,156)
						</div>
						<div class="event-summary">
							$Description
							<a href="$Link">Read More about $Title</a>
							<ul>
							<li>Where: $Venue</li>
							<li>When: $StartDateTime.Nice - $EndDateTime.Nice</li>
							<li>Price: $Price</li>
							</ul>	
						</div>
					</div>
					<% if not $Last %>
						<hr>
					<% end_if %>
			<% end_loop %>		
		</div><!-- end Upcoming Events Section -->
	</article>
</div>