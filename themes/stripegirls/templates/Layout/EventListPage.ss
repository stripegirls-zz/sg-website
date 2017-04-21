<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div id="past-events-section">
		<h2>Past Events</h2>
			<% loop $PastEvents %>
				<% include EventItem %>
				<% if not $Last %>
					<hr>
				<% end_if %>
			<% end_loop %>			
		</div><!-- end Past Events Section -->
		<div id="future-events-section">
		<h2>Upcoming Events</h2>
			<% loop $UpcomingEvents %>
					<% include EventItem %>
					<% if not $Last %>
						<hr>
					<% end_if %>
			<% end_loop %>		
		</div><!-- end Upcoming Events Section -->
	</article>
</div>