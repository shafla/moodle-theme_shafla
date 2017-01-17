<div class="grid-row clearfix">

		<?php for ($i=1; $i <= $PAGE->theme->settings->fpbottomgridamount ; $i++) {

			$desktop = ($PAGE->theme->settings->fpbottomgriddesktop);
			$tab = ($PAGE->theme->settings->fpbottomgridtab);
			$mobile = ($PAGE->theme->settings->fpbottomgridmobile);

			echo "<div class='fp-bottom-grid-element "."grid-".$desktop."-col "."grid-tab-".$tab."-col "."grid-mobile-".$mobile."-col "."'>";			

				echo "<div class='fp-bottom-grid-element-wrapper'>";

					echo "<div class='fp-bottom-grid-image-wrapper'>";

${'bottomgridimage'.$i} = $PAGE->theme->setting_file_url('fpbottomgrid'.$i.'img','fpbottomgrid'.$i.'img');

if ( !empty( ${ 'bottomgridimage'.$i } ) ) {
	if ( ( ${ 'bottomgridimage'.$i } ) !="" ) {

	echo '<img src="'.$PAGE->theme->setting_file_url('fpbottomgrid'.$i.'img','fpbottomgrid'.$i.'img').'">';

}}	else {

	echo "<img src='".$CFG->wwwroot."/theme/".$PAGE->theme->name."/pix/default-grid-icon.png'>";    

}

					echo "</div>";

					echo "<div class='fp-bottom-grid-element-txt-wrapper'>";

						$fpbottomgridtitle = ($PAGE->theme->settings->{'fpbottomgrid'.$i.'title'});
						$fpbottomgridtext = ($PAGE->theme->settings->{'fpbottomgrid'.$i.'text'});
						$fpbottomgridbtn = ($PAGE->theme->settings->{'fpbottomgrid'.$i.'btn'});

						echo "<p class='fp-bottom-grid-title'>".$fpbottomgridtitle."</p>";
						echo "<p class='fp-bottom-grid-text'>".$fpbottomgridtext."</p>";

					echo "</div>";

					echo "<a href='".$fpbottomgridbtn."' class='fp-bottom-grid-link'>"."GO"."</a>";


				echo "</div>";
			echo "</div>";

		} ?>

</div>