<section class="slider">
    <div class="flexslider">

        <ul class="slides">
            <?php for ($i=1; $i <= $PAGE->theme->settings->slidesamount ; $i++) {
                    echo "<li>";
                    echo '<img src="'.$PAGE->theme->setting_file_url('slide'.$i,'slide'.$i).'">';

                    if (!empty($PAGE->theme->settings->{'slide'.$i.'title'})) {
                        if (($PAGE->theme->settings->{'slide'.$i.'title'}) !="") {

                            $slidetitle = ($PAGE->theme->settings->{'slide'.$i.'title'});
                            $slidetext = ($PAGE->theme->settings->{'slide'.$i.'text'});
                            $slidelink = ($PAGE->theme->settings->{'slide'.$i.'link'});

                            echo "<div id='slide-info' class='media-bg'>";
                                echo "<a href='".$slidelink."' class='slide-has-link'>";
                                    echo "<div id='slide-info-wrapper'>";
                                        echo "<p class='slide-title'>".$slidetitle."</p>";
                                        echo "<p class='slide-text'>".$slidetext."</p>"; 
                                    echo "</div>";
                                echo "</a>";
                            echo "</div>";
                    }}                            
                    
                    echo "</li>";
                } ?>
        </ul>

    </div>
</section>





