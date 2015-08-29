		<?php if (is_home()) { ?>	

			<h2>Contact Us</h2>
			<div class="rough-edge"></div>
			<form class="contact-form" action="action.php" method="POST">
				<input type="text" name="first-name" placeholder="First Name" tabindex="1" size="40" maxlength="100">
				<input type="text" name="last-name" placeholder="Last Name" tabindex="2" size="40" maxlength="100">
				<input type="text" name="email" placeholder="Email Address" tabindex="3" size="40" maxlength="100">
				<select name="inquirytype" tabindex="4">
					<option value="Option 1">General Question</option>
					<option value="Option 2">Feedback</option>
					<option value="Option 3">Business Related</option>
				</select>
				<textarea placeholder="Message..." id=""></textarea>
				<input class="" type="submit" value="Send">
			</form>
			<div class="contact-details">+1 310 625 4843</div>
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
						<li><a href="#">Recent Work</a></li>
						<li><a href="#">Capabilities</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>
				<hr>
				<form class="footer-contact-form" action="action.php" method="POST">
					<input type="text" name="first-name" placeholder="First Name" tabindex="1" size="40" maxlength="100" style="margin-right:0px;" />
					<input type="text" name="last-name" placeholder="Last Name" tabindex="2" size="40" maxlength="100" style="margin-left:4px;" />
					<input type="text" name="email" placeholder="Email Address" tabindex="3" size="40" maxlength="100" style="margin-right:0px;" />
					<select name="inquirytype" tabindex="4" style="margin-left:4px;">
						<option value="Option 1">General Question</option>
						<option value="Option 2">Feedback</option>
						<option value="Option 3">Business Related</option>
					</select>
					<textarea placeholder="Message..." id="" tabindex="5"></textarea>
					<input class="" type="submit" value="Send" tabindex="6" />
				</form>
	
			</div>

		<?php } ?>
			
		</div>
		
		<?php wp_footer(); ?>

	</body>
</html>