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
 * The one column layout.
 *
 * @package    theme_shafla
 * @copyright  2017 Shafla Team | http://shafla.pl/
 * @copyright  Theme based on Theme Clean - Moodle 3.1
 * @author  2017 Shafla Team | http://shafla.pl/
 * @author  Theme based on Theme Clean - Moodle 3.1
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// Add blocks regions
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

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo $CFG->wwwroot.'/theme/'.$PAGE->theme->name.'/style/font-awesome.css';?>">
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

<div id="page" class="container-fluid">
    <?php echo $OUTPUT->full_header(); ?>
    <div id="page-content" class="row-fluid">
        <section id="region-main" class="span12">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
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
    <?php require_once(dirname(__FILE__).'/includes/footer.php'); ?>
</footer>

<?php echo $OUTPUT->standard_end_of_body_html() ?>

<script type="text/javascript">

    // -- sticky footer
    $.fn.stickyFooter = function() {
        var documentHeight = $(window).outerHeight();
        var fHeight = $(this).outerHeight();
        var fTop = $(this).position().top + fHeight;

        if (fTop < documentHeight) {
            this.css('margin-top', (documentHeight - fTop) + 'px');
        }
    }

    jQuery(document).ready(function(){

        // -- sticky footer
        jQuery("#page-footer").stickyFooter();

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
        
    });

</script>

</body>
</html>
