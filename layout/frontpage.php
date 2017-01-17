<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * 
 * The front page (three columns) layout.
 *
 * @package    theme_shafla
 * @copyright  2017 Shafla Team | http://shafla.pl/
 * @copyright  Theme based on Theme Clean - Moodle 3.1
 * @author  2017 Shafla Team | http://shafla.pl/
 * @author  Theme based on Theme Clean - Moodle 3.1
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// Set default (LTR) layout mark-up for a three column page.
$regionmainbox = 'span9 desktop-first-column';
$regionmain = 'span8 pull-right';
$sidepre = 'span4 desktop-first-column';
$sidepost = 'span3 pull-right';

// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'span9 pull-right';
    $regionmain = 'span8';
    $sidepre = 'span4 pull-right';
    $sidepost = 'span3 desktop-first-column';
}

// Add blocks regions
$hasfooterregioni = $PAGE->blocks->region_has_content('side-footeri', $OUTPUT);
$hasfooterregionii = $PAGE->blocks->region_has_content('side-footerii', $OUTPUT);
$hasfooterregioniii = $PAGE->blocks->region_has_content('side-footeriii', $OUTPUT);

$knownfooterregioni = $PAGE->blocks->is_known_region('side-footeri');
$knownfooterregionii = $PAGE->blocks->is_known_region('side-footerii');
$knownfooterregioniii = $PAGE->blocks->is_known_region('side-footeriii');

$hasparallaxregioni = $PAGE->blocks->region_has_content('side-parallaxi', $OUTPUT);
$hasparallaxregionii = $PAGE->blocks->region_has_content('side-parallaxii', $OUTPUT);

$knownparallaxregioni = $PAGE->blocks->is_known_region('side-parallaxi');
$knownparallaxregionii = $PAGE->blocks->is_known_region('side-parallaxii');

$hasadminregion = $PAGE->blocks->region_has_content('side-admin', $OUTPUT);
$knownadminregion = $PAGE->blocks->is_known_region('side-admin');

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/js/jquery-2.2.4.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/js/jquery.flexslider.js';?>"></script>
    <script type="text/javascript" src="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/js/parallax.js';?>"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/style/font-awesome.css';?>">

    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/style/slider.css';?>">

    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/style/nav.css';?>">

    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/style/ovr.css';?>">


</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>
    <div class="site-loader"></div>
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar">
    <nav role="navigation" class="navbar-inner">
        <div id="side-menu">
            <?php require_once(dirname(__FILE__).'/includes/nav.php'); ?>
        </div>
        <div id="has-logo" class="container-fluid">
            <div class="site-logo-wrapper">
                <?php echo "<a class='logo' "."href='".$CFG->wwwroot."'>";
                    if (!empty($PAGE->theme->settings->{'logo'})) {
                        if (($PAGE->theme->settings->{'logo'}) !="") {
                            echo '<img src="'.$PAGE->theme->setting_file_url('logo', 'logo').'">' ;
                    }} else {
                        echo "<img src='".$CFG->wwwroot."/theme/".$PAGE->theme->name."/pix/default-site-logo.png'>";    
                    }
                echo "</a>"; ?>
            </div>
        </div>
    </nav>
</header>

<div id="slider-wrap" class="clearfix">
    <?php require_once(dirname(__FILE__).'/includes/slider.php'); ?>
</div>

<div id="fp-top-grid" class="clearfix">
    <div id="fp-top-grid-wrapper" class="clearfix">
        <?php require_once(dirname(__FILE__).'/includes/fptopgrid.php'); ?>
    </div>
</div>

<div id="parallax-section" class="clearfix">
        <?php require_once(dirname(__FILE__).'/includes/parallax.php'); ?>
</div>

<div id="fp-bottom-grid" class="clearfix">
    <div id="fp-bottom-grid-wrapper" class="container-fluid clearfix">
        <?php require_once(dirname(__FILE__).'/includes/fpbottomgrid.php'); ?>
    </div>
</div>

<div id="page-wrapper" <?php if(!is_siteadmin()){echo "class='clearfix normal-user'";}else{echo"class='clearfix'";}?>>
<div id="page" class="container-fluid">
    <?php echo $OUTPUT->full_header(); ?>
    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>
</div>
</div>

<?php if (is_siteadmin()) { ?>
    <div id="adminblock" class="clearfix container-fluid">
        <h4><?php echo get_string('region_admin_info', 'theme_shafla'); ?></h4>
        <div class="adminblockregion">
            <?php if ($knownadminregion) { echo $OUTPUT->blocks('side-admin'); }?>
        </div>
    </div>
<?php } ?>

<i class="fa fa-angle-double-up scrollBtn" aria-hidden="true"></i>

<footer id="page-footer" class="clearfix">
    <div id="page-footer-wrapper" class="container-fluid clearfix">
        <div class="footer-region-wrapper grid-row clearfix">

            <div class="footer-region-one grid-3-col grid-tab-3-col grid-mobile-1-col">
                <?php if ($knownfooterregioni) { echo $OUTPUT->blocks('side-footeri'); }?>
            </div>
            <div class="footer-region-two grid-3-col grid-tab-3-col grid-mobile-1-col">
                <?php if ($knownfooterregionii) { echo $OUTPUT->blocks('side-footerii'); }?>
            </div>
            <div class="footer-region-three grid-3-col grid-tab-3-col grid-mobile-1-col">
                <?php if ($knownfooterregioniii) { echo $OUTPUT->blocks('side-footeriii'); }?>
            </div>

        </div>
    </div>
    <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
</footer>

<?php echo $OUTPUT->standard_end_of_body_html() ?>

<script type="text/javascript">

    $(document).ready(function(){

        // -- slideshow init
        jQuery('.flexslider').flexslider({
            animation: "fade",
            controlNav: true,
                start: function(slider){
                    jQuery('body').removeClass('loading');
                }
        });

        // -- elements height
        $.fn.equalHeight = function() {
            var maxHeight = 0;
            return this.each(function(index, box) {
                var boxHeight = $(box).height();
                maxHeight = Math.max(maxHeight, boxHeight);
            }).height(maxHeight);
        };

        // -- menu
        jQuery(".nav-toggle").click(function(){
            jQuery("nav").toggleClass("user-navigation__visible");
            jQuery(".nav-toggle").toggleClass("nav-toggle--true");
            jQuery(".menu-background").toggleClass("menu-background--true");
        });

        jQuery(".menu-background").click(function(){
            jQuery("nav").toggleClass("user-navigation__visible");
            jQuery(".nav-toggle").toggleClass("nav-toggle--true");
            jQuery(".menu-background").toggleClass("menu-background--true");
            jQuery(".dropdown-item").removeClass("dropdown-item--true");
            jQuery(".search-item").removeClass("search-toggle--true");
        });

        jQuery(".dropdown-toggle").click(function() {
            jQuery(".search-item").removeClass("search-toggle--true");
            jQuery(this).parent().toggleClass("dropdown-item--true");
            jQuery('.dropdown-toggle').not(this).parent().removeClass('dropdown-item--true');
        });

        // -- scroll top btn
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollBtn').fadeIn();
            } else {
                $('.scrollBtn').fadeOut();
            }
        });
        
        $('.scrollBtn').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });

    });

    $(window).load(function(){

        // -- site loader
        $(".site-loader").fadeOut("slow");

        // -- top grid text height
        $('.fp-top-grid-element-txt-wrapper').equalHeight();

        // -- bottom grid text height
        $('.fp-bottom-grid-element-txt-wrapper').equalHeight();
        
    });

    $(window).resize(function(){

        // -- grid text height
        $('.fp-top-grid-element-txt-wrapper').css('height','auto');
        $('.fp-top-grid-element-txt-wrapper').equalHeight();

        // -- grid text height
        $('.fp-bottom-grid-element-txt-wrapper').css('height','auto');
        $('.fp-bottom-grid-element-txt-wrapper').equalHeight();
    });
                
</script>

</body>
</html>
