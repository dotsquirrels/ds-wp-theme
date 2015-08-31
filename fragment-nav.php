<div class="mobilenav">
	<ul>
		<li><a href="<?php echo site_url('/'); ?>">Home</a></li>
		<li><a href="<?php echo site_url('/capabilities'); ?>">Capabilities</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
		<li><a href="<?php echo site_url('/blog'); ?>">Tips & Rants</a></li>
		<li class="social-icons">
			<ul>
				<li class="linkdin"><a href="http://www.linkedin.com/company/dot-squirrels-llc" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
				<li class="facebook"><a href="http://www.facebook.com/DotSquirrels" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
				<li class="twitter"><a href="http://twitter.com/dotsquirrels" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
				<li class="instagram"><a href="http://instagram.com/explore/locations/855074924/" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
			</ul>			
		</li>
	</ul>
</div>

<a href="javascript:void(0)" class="icon">
	<div class="hamburger">
		<div class="menui top-menu"></div>
		<div class="menui mid-menu"></div>
		<div class="menui bottom-menu"></div>
	</div>
</a>

<script type="text/javascript">

function togglescroll() {
  $('body').on('touchstart', function(e) {
    if ($('body').hasClass('scroll')) {
      e.preventDefault();
    }
  });
}

$(document).ready(function() {
  togglescroll()
  $(".icon").click(function() {
    $(".mobilenav").fadeToggle(500);
    $(".top-menu").toggleClass("top-animate");
    $("body").toggleClass("noscroll");
    $(".mid-menu").toggleClass("mid-animate");
    $(".bottom-menu").toggleClass("bottom-animate");
  });
});

// PUSH ESC KEY TO EXIT
$(document).keydown(function(e) {
  if (e.keyCode == 27) {
    $(".mobilenav").fadeOut(500);
    $(".top-menu").removeClass("top-animate");
    $("body").removeClass("noscroll");
    $(".mid-menu").removeClass("mid-animate");
    $(".bottom-menu").removeClass("bottom-animate");
  }
});

</script>