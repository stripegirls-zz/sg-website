<footer class="footer" role="contentinfo">
	<div class="inner">
		<div class="unit size4of4 lastUnit">
			<div class="left">
				<div class="copyright">$Copyright</div>
			</div>
			<% with $SiteConfig %>
				<% if $FacebookUsername || $TwitterUsername %>
					<div class="social-media right">
						<ul>
							<li><a href="https://stripegirls.slack.com/" target="_blank">Slack</a></li>
							<li><a href="https://github.com/stripegirls" target="_blank">Github</a></li>
							<li><a href="http://www.meetup.com/Wellington-Stripe-Girls/" target="_blank">Meetup</a></li>
			    			<% if $FacebookUsername %>
			      				<li><a href="$SocialMediaLink" target="_blank"><img src="$ThemeDir/images/Facebook.png" alt="Facebook link" width="24" height="24"></a></li>
			    			<% end_if %>
			    			<% if $TwitterUsername %>
			      				<li><a href="$SocialMediaLink(twitter)" target="_blank"><img src="$ThemeDir/images/Twitter.png" alt="Twitter link" width="24" height="20"></a></li>
			    			<% end_if %>                     
						</ul>
					</div>	
				<% end_if %>
			<% end_with %>   		
		</div>
	</div>
</footer>