<footer class="footer" role="contentinfo">
	<div class="inner">
		<div class="unit size4of4 lastUnit">
			<div class="left">
				<a href="$BaseHref" class="brand" rel="home">&copy; $SiteConfig.Title 2015</a><br />

				<small class="right">Current theme based on <a href="http://simple.innovatif.com/about/">Innovatif</a> by <a href="http://www.saratusar.com">Sara</a> | Powered by <a href="http://silverstripe.org">SilverStripe</a></small>

				<!-- This is where the include Navigation is commented out
				<span class="arrow">&rarr;</span> <% include Navigation %>
				-->

			</div>


			<!-- This is where the social media handles are stored -->
			<% with $SiteConfig %>
				<% if $FacebookUsername || $TwitterUsername %>
				<div class="social-media right">
					<a href="http://stripegirls.slack.com" target="_blank"><img src="$ThemeDir/images/Slack.png" alt="Chat with us on Slack!" /></a>
					<a href="http://github.com/stripegirls" target="_blank"><img src="$ThemeDir/images/Github.png" alt="Our playground on Github!" /></a>
					<a href="http://www.meetup.com/Wellington-Stripe-Girls/" target="_blank"><img src="$ThemeDir/images/Meetup-36.png" alt="Join us on Meetup!" /></a>
	    			<% if $FacebookUsername %>
	      				<a href="$SocialMediaLink" target="_blank"><img src="$ThemeDir/images/Facebook.png" alt="Like Stripegirls on Facebook!" /></a>
	    			<% end_if %>
	    			<% if $TwitterUsername %>
	      				<a href="$SocialMediaLink(twitter)" target="_blank"><img src="$ThemeDir/images/Twitter.png" alt="Follow Stripegirls on Twitter!" /></a>
	    			<% end_if %>
				</div>
				<% end_if %>
			<% end_with %>
			<!-- End of social media handles -->

		</div>
	</div>
</footer>
