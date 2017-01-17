<div class="menu-background"></div>

<nav>
	<div class="mobile-menu-top-wrapper clearfix">
		<?php require_once(dirname(__FILE__).'/search.php'); ?>

		<button class="nav-toggle">
		    <div class="burgx"></div>
		    <div class="burgx2"></div>
		    <div class="burgx3"></div>
	  	</button>
  	</div>

  	<div class="personal-info clearfix">

  		<?php
            global $USER;
            $fullname = fullname($USER, true);

            echo "<div class='user_pic clearfix'>";
                if (isloggedin()) { echo $OUTPUT->user_picture($USER, array('size' => 150)); }
            echo "</div>";
        ?>

		<?php echo $OUTPUT->login_info(); ?>

  	</div>

	<?php if (isloggedin()) { ?>
		<div id="custommenulms"><?php echo $OUTPUT->custom_menulms(); ?></div>
	<?php } ?>

</nav>