<div class="footer-bar-wrapper clearfix">

	<div class="social-icons clearfix">
		<div class="social-icons-wrapper">
	
			<?php

			$facebook = ($PAGE->theme->settings->sfacebook);
			$facebooktrue = (!empty($PAGE->theme->settings->sfacebook)) || (($PAGE->theme->settings->sfacebook) !="");

			$linkedin = ($PAGE->theme->settings->slinkedin);
			$linkedintrue = (!empty($PAGE->theme->settings->slinkedin)) || (($PAGE->theme->settings->slinkedin) !="");

			$googleplus = ($PAGE->theme->settings->sgplus);
			$googleplustrue = (!empty($PAGE->theme->settings->sgplus)) || (($PAGE->theme->settings->sgplus) !="");

			$twitter = ($PAGE->theme->settings->twitter);
			$twittertrue = (!empty($PAGE->theme->settings->twitter)) || (($PAGE->theme->settings->twitter) !="");


			if ($facebooktrue) {
				echo '<a href="'.$facebook.'" class="social-icon fa fa-facebook-square" target="_blank"> </a>';}
			if ($linkedintrue) {
				echo '<a href="'.$linkedin.'" class="social-icon fa fa-linkedin-square" target="_blank"> </a>';}
			if ($googleplus) {
				echo '<a href="'.$googleplus.'" class="social-icon fa fa-google-plus-square" target="_blank"> </a>';}
			if ($twitter) {
				echo '<a href="'.$twitter.'" class="social-icon fa fa-twitter-square" target="_blank"> </a>';}

			?>

		</div>
	</div>

	<div class="copyright clearfix">
		<div class="copyright-wrapper">
	
			<?php

			$copyright = ($PAGE->theme->settings->copyright_txt);
			$copyrighttrue = (!empty($PAGE->theme->settings->copyright_txt)) || (($PAGE->theme->settings->copyright_txt) !="");

			if ($copyrighttrue) {
				echo '<p class="copyright-txt">'.$copyright.'</p>';}
			
			?>

		</div>
	</div>

</div>
