		<?php if (is_home()) { ?>	

			<h2>Contact Us</h2>
			<div class="rough-edge"></div>
			<form class="contact-form" action="action.php" method="POST">
				<input type="text" name="name" placeholder="Name" tabindex="2" size="40" maxlength="100" />
				<input type="text" name="email" placeholder="Email Address" tabindex="3" size="40" maxlength="100">
				<textarea placeholder="Message..." id=""></textarea>
				<input class="" type="submit" value="Send">
			</form>
			<div class="contact-details">310 566 2800</div>
			<div class="contact-details"><a href="mailto:help@dotsquirrels.com">help@dotsquirrels.com</a></div>
			<hr>
			<div class="contact-details">8731 Venice Blvd., Los Angeles, CA 90034</div>
				
			<div class="back-to-top">
				<a href="#top">Back to top</a>
			</div>

		<?php } else { ?>

			<div class="footer">
				<div class="copyright-links">
					<p>&copy; 2015 Dot Squirrels</p>
					<ul>
						<li><a href="<?php echo site_url('/'); ?>">Home</a></li>
						<li><a href="<?php echo site_url('/capabilities'); ?>">Capabilities</a></li>
						<li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
						<li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
					</ul>
				</div>
				<hr>
				<h2>Contact Us</h2>
				<form class="footer-contact-form" action="action.php" method="POST">
					<input type="text" name="name" placeholder="Name" tabindex="2" size="40" maxlength="100" />
					<input type="text" name="email" placeholder="Email Address" tabindex="3" size="40" maxlength="100" style="margin-left: 8px;" />
					<textarea placeholder="Message..." id="" tabindex="5"></textarea>
					<input class="" type="submit" value="Send" tabindex="6" />
				</form>
	
			</div>

		<?php } ?>
			
		</div>
		
		<?php wp_footer(); ?>

	</body>
</html>