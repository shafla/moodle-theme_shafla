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
 * Strings for component 'theme_shafla', language 'en'
 *
 * @package    theme_shafla
 * @copyright  2017 Shafla Team | http://shafla.pl/
 * @copyright  Theme based on Theme Clean - Moodle 3.1
 * @author  2017 Shafla Team | http://shafla.pl/
 * @author  Theme based on Theme Clean - Moodle 3.1
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// -- README
$string['choosereadme'] = '
<br>
<img src="shafla/pix/favicon.ico"/> <h2>Shafla Theme</h2>
<br>
<p style="font-size: 14px;width: 60%;">Thank you for choosing Theme Shafla. When designing our theme, we wanted it to be as flexible as possible by adding a large variety of style options, at the same time making it slick and feel modern. We hope this theme will meet your needs and expectations.</p>
<br>
<h4>Contact Us: <a href="http://shafla.pl/home-en/">Shafla Team<a/></h4>
<h4>Visit: <a href="http://custom-lms.shafla.pl/shafla_theme_docs/">demo site<a/></h4>
<h4>Check: <a href="http://custom-lms.shafla.pl/shafla_theme_docs/">documentation<a/></h4>';

// -- NAME
$string['configtitle'] = 'Shafla Theme';
$string['pluginname'] = 'Shafla Theme';

// -- LOGIN
$string['loggedinas'] = 'Hello, {$a}';

// -- SEARCH
$string['side_menu_search'] = 'Search courses';

// -- BLOCKS
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

// -- ADMIN REGION
$string['region-side-admin'] = 'Admin blocks region';
$string['region_admin_info'] = 'These blocks are only visible to admin user';

// -- SLIDESHOW
$string['slideshow'] = 'Slideshow';

$string['slidesamount'] = 'Amount of slides';
$string['slidesamountdesc'] = 'Choose how many pages you want in your slideshow and save';

$string['slide_title_color'] = 'Text color';
$string['slide_title_color_desc'] = 'Select a color for slide title';

$string['slide_text_color'] = 'Text color';
$string['slide_text_color_desc'] = 'Select a color for slide text';

$string['slide_txt_bg'] = 'Mobile slide bg';
$string['slide_txt_bg_desc'] = 'Select a background color for slide text on mobile devices';

for ($i=1; $i < 11 ; $i++) {
	$string['slide'.$i] = 'Slide';
	$string['slide'.$i.'desc'] = 'Add an image to your slideshow, please make sure to make your pictures the same size for better visual effect';

	$string['slide'.$i.'title'] = 'Slide title';
	$string['slide'.$i.'titledesc'] = 'This is where you add a title to your slideshow';

	$string['slide'.$i.'text'] = 'Slide text';
	$string['slide'.$i.'textdesc'] = 'Add a text which will be displayed in your slideshow';

	$string['slide'.$i.'link'] = 'Slide link';
	$string['slide'.$i.'linkdesc'] = 'Add a link to your slideshow';
}

// -- SOCIAL ICONS
$string['social'] = 'Social Icons';

$string['sfacebook'] = 'Facebook';
$string['sfacebook_desc'] = 'Your Facebook link';

$string['slinkedin'] = 'Linkedin';
$string['slinkedin_desc'] = 'Your Linkedin link';

$string['sgplus'] = 'Google plus';
$string['sgplus_desc'] = 'Your Google+ link';

$string['twitter'] = 'Twitter';
$string['twitter_desc'] = 'Your Twitter link';

$string['social_bg'] = 'Social bar background color';
$string['social_bg_desc'] = 'Select a color for social icons background';

$string['social_color'] = 'Social icons color';
$string['social_color_desc'] = 'Select a color for social icons';

// -- HEADER
$string['header'] = 'Header';

$string['logo'] = 'Logo';
$string['logo_desc'] = 'Upload header logo';

$string['header_bg'] = 'Header background color';
$string['header_bg_desc'] = 'Set header background color';

// -- COPYRIGHT
$string['copyright'] = 'Copyrights';

$string['copyright_txt'] = 'Copyrights text';
$string['copyright_txt_desc'] = 'Add copyrights text';

$string['copyright_bg'] = 'Copyrights background color';
$string['copyright_bg_desc'] = 'Select a background color for copyrights';

$string['copyright_color'] = 'Copyrights text color';
$string['copyright_color_desc'] = 'Select a color for copyrights text';

// -- FOOTER BLOCKS
$string['region-side-footeri'] = 'Footer block region 1';
$string['region-side-footerii'] = 'Footer block region 2';
$string['region-side-footeriii'] = 'Footer block region 3';

// -- FOOTER
$string['footer'] = 'Footer';

$string['footer_bg'] = 'Footer background color';
$string['footer_bg_desc'] = 'Select a color for footer area';

// -- TOP GRID
$string['fptopgrid'] = 'Top grid';

$string['fptopgridamount'] = 'Amount of grid elements';
$string['fptopgridamountdesc'] = 'Choose the amount of grid elements';

for ($i=1; $i < 13 ; $i++) {
	$string['fptopgrid'.$i.'img'] = 'Grid image';
	$string['fptopgrid'.$i.'imgdesc'] = 'Choose an image for the grid';

	$string['fptopgrid'.$i.'title'] = 'Grid title';
	$string['fptopgrid'.$i.'titledesc'] = 'Insert grid title text';

	$string['fptopgrid'.$i.'text'] = 'Grid text';
	$string['fptopgrid'.$i.'textdesc'] = 'Insert text diaplayed in grid';

	$string['fptopgrid'.$i.'btn'] = 'Grid button';
	$string['fptopgrid'.$i.'btndesc'] = 'Grid button name';
}

$string['fptopgriddesktop'] = 'Desktop grid elements in a row';
$string['fptopgridtab'] = 'Tablet grid elements in a row';
$string['fptopgridmobile'] = 'Mobile grid elements in a row';

$string['griddescinfo'] = 'For better visual effect, make sure not to set a higher amount of elements than the default amount of grid elements.';

// -- BOTTOM GRID
$string['fpbottomgrid'] = 'Bottom grid';
$string['fpbottomgridamount'] = 'Amount of grid elements';
$string['fpbottomgridamountdesc'] = 'Choose the amount of grid elements';

for ($i=1; $i < 13 ; $i++) {
	$string['fpbottomgrid'.$i.'img'] = 'Grid image';
	$string['fpbottomgrid'.$i.'imgdesc'] = 'Choose an image for the grid';

	$string['fpbottomgrid'.$i.'title'] = 'Grid title';
	$string['fpbottomgrid'.$i.'titledesc'] = 'Insert grid title text';

	$string['fpbottomgrid'.$i.'text'] = 'Grid text';
	$string['fpbottomgrid'.$i.'textdesc'] = 'Insert text diaplayed in grid';

	$string['fpbottomgrid'.$i.'btn'] = 'Grid button';
	$string['fpbottomgrid'.$i.'btndesc'] = 'Grid button name';

	$string['fpbottomgriddesktop'] = 'Desktop grid elements in a row';
	$string['fpbottomgridtab'] = 'Tablet grid elements in a row';
	$string['fpbottomgridmobile'] = 'Mobile grid elements in a row';
}

// -- PARALLAX
$string['region-side-parallaxi'] = 'Parallax block region 1';
$string['region-side-parallaxii'] = 'Parallax block region 2';

$string['parallax'] = 'Parallax section';
$string['parallaximg'] = 'Set parallax image';
$string['parallax_desc'] = 'Add an image for parallax area';

$string['parallaxheight'] = 'Parallax height';
$string['parallaxheight_desc'] = 'Set paralalx height';

$string['parallaxmargin'] = 'Parallax margin';
$string['parallaxmargin_desc'] = 'Set paralalx margin';

// -- SIDE MENU
$string['sidemenu'] = 'Menu';

$string['sidemenu_bg'] = 'Side menu background color';
$string['sidemenu_bg_desc'] = 'Set side menu background color';

// -- LOGIN PAGE
$string['loginpage'] = 'Login Page';

$string['loginpagebg'] = 'Login Page background image';
$string['loginpagebg_desc'] = 'Add an image to Login Page';

// -- ADMIN REGION
$string['region-side-admin'] = 'Admin blocks region';
$string['region_admin_info'] = 'These blocks are only visible to admin user';
