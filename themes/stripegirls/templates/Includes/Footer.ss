<footer class="footer" role="contentinfo">
	<div class="inner">
		<div class="unit size4of4 lastUnit">
			<div class="left">
				<a href="$BaseHref" class="brand" rel="home">$SiteConfig.Title</a>
				<span class="arrow">&rarr;</span> <% include Navigation %></div>
			<small class="right"><a href="http://simple.innovatif.com/about/">Theme</a> by <a href="http://www.saratusar.com">Sara</a> (Innovatif) / Powered by <a href="http://silverstripe.org">SilverStripe</a></small>
			<% with $SiteConfig %>
				<% if $FacebookUsername || $TwitterUsername %>
				<div class="social-media right">
				<ul>
	    			<% if $FacebookUsername %>
	      				<li><a href="$SocialMediaLink">$SocialMediaLink</a></li>
	    			<% end_if %>
	    			<% if $TwitterUsername %>
	      				<li><a href="$SocialMediaLink('twitter')">$SocialMediaLink('Twitter')</a></li>
	    			<% end_if %>                     
				</ul>
				</div>	
				<% end_if %>
			<% end_with %>   		
		</div>
	</div>
</footer>