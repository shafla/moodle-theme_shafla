<div class="clearfix">

		<?php for ($i=1; $i <= $PAGE->theme->settings->fptopgridamount ; $i++) {

			$desktop = ($PAGE->theme->settings->fptopgriddesktop);
			$tab = ($PAGE->theme->settings->fptopgridtab);
			$mobile = ($PAGE->theme->settings->fptopgridmobile);

			echo "<div class='fp-top-grid-element "."grid-".$desktop."-col "."grid-tab-".$tab."-col "."grid-mobile-".$mobile."-col "."'>";

				echo "<div class='fp-top-grid-element-wrapper'>";

					//echo '<img src="'.$PAGE->theme->setting_file_url('fptopgrid'.$i.'img','fptopgrid'.$i.'img').'">';

					echo "<div class='fp-top-grid-element-txt-wrapper'>";

						$fptopgridtitle = ($PAGE->theme->settings->{'fptopgrid'.$i.'title'});
						$fptopgridtext = ($PAGE->theme->settings->{'fptopgrid'.$i.'text'});
						$fptopgridbtn = ($PAGE->theme->settings->{'fptopgrid'.$i.'btn'});

						echo "<p class='fp-top-grid-title'>".$fptopgridtitle."</p>";
						echo "<p class='fp-top-grid-text'>".$fptopgridtext."</p>";

					echo "</div>";

					echo "<a href='".$fptopgridbtn."' class='fp-top-grid-link'>"."GO"."</a>";


				echo "</div>";
			echo "</div>";

		} ?>

</div>