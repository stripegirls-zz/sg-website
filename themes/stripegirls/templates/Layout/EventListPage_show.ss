<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<% with $Event %>
	<article>
		<h1>$Title</h1>
		<div class="image-large">
			$Photo.SetWidth(750)
		</div>
		<div class="event-details">
		<ul>
		<li>Where: $Venue</li>
		<li>When: $StartDateTime.Nice - $EndDateTime.Nice</li>
		<li>Price: $Price</li>
		<li>Descrption: $Description</li>	
		<li>Organizer: $Organizer ($OrganizerContact)</li>
		</ul>
		<hr>
		$Agenda
		</div>
	</article>
	<% end_with %>
</div>