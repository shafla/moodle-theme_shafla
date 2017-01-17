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
 * This file contains functions specific to the needs of the Shafla Theme
 *
 * @package    theme_shafla
 * @copyright  2017 Shafla Team | http://shafla.pl/
 * @copyright  Theme based on Theme Clean - Moodle 3.1
 * @author  2017 Shafla Team | http://shafla.pl/
 * @author  Theme based on Theme Clean - Moodle 3.1
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// -- SLIDER

function theme_shafla_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('shafla');
        switch($filearea){

            case "slide1";
            return $theme->setting_file_serve('slide1', $args, $forcedownload, $options);
            break;

            case "slide2";
            return $theme->setting_file_serve('slide2', $args, $forcedownload, $options);
            break;

            case "slide3";
            return $theme->setting_file_serve('slide3', $args, $forcedownload, $options);
            break;

            case "slide4";
            return $theme->setting_file_serve('slide4', $args, $forcedownload, $options);
            break;

            case "slide5";
            return $theme->setting_file_serve('slide5', $args, $forcedownload, $options);
            break;

            case "slide6";
            return $theme->setting_file_serve('slide6', $args, $forcedownload, $options);
            break;

            case "slide7";
            return $theme->setting_file_serve('slide7', $args, $forcedownload, $options);
            break;

            case "slide8";
            return $theme->setting_file_serve('slide8', $args, $forcedownload, $options);
            break;

            case "slide9";
            return $theme->setting_file_serve('slide9', $args, $forcedownload, $options);
            break;

            case "slide10";
            return $theme->setting_file_serve('slide10', $args, $forcedownload, $options);
            break;

            case "fptopgrid1img";
            return $theme->setting_file_serve('fptopgrid1img', $args, $forcedownload, $options);
            break;

            case "fptopgrid2img";
            return $theme->setting_file_serve('fptopgrid2img', $args, $forcedownload, $options);
            break;

            case "fptopgrid3img";
            return $theme->setting_file_serve('fptopgrid3img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid1img";
            return $theme->setting_file_serve('fpbottomgrid1img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid2img";
            return $theme->setting_file_serve('fpbottomgrid2img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid3img";
            return $theme->setting_file_serve('fpbottomgrid3img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid4img";
            return $theme->setting_file_serve('fpbottomgrid4img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid5img";
            return $theme->setting_file_serve('fpbottomgrid5img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid6img";
            return $theme->setting_file_serve('fpbottomgrid6img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid7img";
            return $theme->setting_file_serve('fpbottomgrid7img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid8img";
            return $theme->setting_file_serve('fpbottomgrid8img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid9img";
            return $theme->setting_file_serve('fpbottomgrid9img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid10img";
            return $theme->setting_file_serve('fpbottomgrid10img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid11img";
            return $theme->setting_file_serve('fpbottomgrid11img', $args, $forcedownload, $options);
            break;

            case "fpbottomgrid12img";
            return $theme->setting_file_serve('fpbottomgrid12img', $args, $forcedownload, $options);
            break;

            case "parallaximg";
            return $theme->setting_file_serve('parallaximg', $args, $forcedownload, $options);
            break;

            case "loginpagebg";
            return $theme->setting_file_serve('loginpagebg', $args, $forcedownload, $options);
            break;

            case "logo";
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
            break;

            default;
            send_file_not_found();
            break;
        }
    }
}

function theme_shafla_process_css($css, $theme) {

    if (!empty($theme->settings->social_color)) {
    $social_color = $theme->settings->social_color;
    } else {
        $social_color = null;
    }
    $css = theme_shafla_set_social_color ($css, $social_color);

    if (!empty($theme->settings->social_bg)) {
    $social_bg = $theme->settings->social_bg;
    } else {
        $social_bg = null;
    }
    $css = theme_shafla_set_social_bg ($css, $social_bg);

    if (!empty($theme->settings->copyright_color)) {
    $copyright_color = $theme->settings->copyright_color;
    } else {
        $copyright_color = null;
    }
    $css = theme_shafla_set_copyright_color ($css, $copyright_color);

    if (!empty($theme->settings->copyright_bg)) {
    $copyright_bg = $theme->settings->copyright_bg;
    } else {
        $copyright_bg = null;
    }
    $css = theme_shafla_set_copyright_bg ($css, $copyright_bg);

    if (!empty($theme->settings->footer_bg)) {
    $footer_bg = $theme->settings->footer_bg;
    } else {
        $footer_bg = null;
    }
    $css = theme_shafla_set_footer_bg ($css, $footer_bg);

    if (!empty($theme->settings->parallaxheight)) {
    $parallaxheight = $theme->settings->parallaxheight;
    } else {
        $parallaxheight = null;
    }
    $css = theme_shafla_set_parallaxheight ($css, $parallaxheight);

    if (!empty($theme->settings->parallaxmargin)) {
    $parallaxmargin = $theme->settings->parallaxmargin;
    } else {
        $parallaxmargin = null;
    }
    $css = theme_shafla_set_parallaxmargin ($css, $parallaxmargin);

    if (!empty($theme->settings->sidemenu_bg)) {
    $sidemenu_bg = $theme->settings->sidemenu_bg;
    } else {
        $sidemenu_bg = null;
    }
    $css = theme_shafla_set_sidemenu_bg ($css, $sidemenu_bg);

    $loginbg_url = $theme->setting_file_url('loginpagebg', 'loginpagebg');

    if (!empty($loginbg_url)) {
    $loginpagebg = $theme->setting_file_url('loginpagebg', 'loginpagebg');
    } else {
        $loginpagebg = null;
    }
    $css = theme_shafla_set_loginpagebg ($css, $loginpagebg);

    if (!empty($theme->settings->slide_title_color)) {
    $slide_title_color = $theme->settings->slide_title_color;
    } else {
        $slide_title_color = null;
    }
    $css = theme_shafla_set_slide_title_color ($css, $slide_title_color);

    if (!empty($theme->settings->slide_text_color)) {
    $slide_text_color = $theme->settings->slide_text_color;
    } else {
        $slide_text_color = null;
    }
    $css = theme_shafla_set_slide_text_color ($css, $slide_text_color);

    if (!empty($theme->settings->slide_txt_bg)) {
    $slide_txt_bg = $theme->settings->slide_txt_bg;
    } else {
        $slide_txt_bg = null;
    }
    $css = theme_shafla_set_slide_txt_bg ($css, $slide_txt_bg);

    if (!empty($theme->settings->header_bg)) {
    $header_bg = $theme->settings->header_bg;
    } else {
        $header_bg = null;
    }
    $css = theme_shafla_set_header_bg ($css, $header_bg);

    return $css;

}


function theme_shafla_set_social_color($css, $value) {
    $tag = '[[setting:social_color]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_social_bg($css, $value) {
    $tag = '[[setting:social_bg]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_copyright_color($css, $value) {
    $tag = '[[setting:copyright_color]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_copyright_bg($css, $value) {
    $tag = '[[setting:copyright_bg]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_footer_bg($css, $value) {
    $tag = '[[setting:footer_bg]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_parallaxheight($css, $value) {
    $tag = '[[setting:parallaxheight]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '300px';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_parallaxmargin($css, $value) {
    $tag = '[[setting:parallaxmargin]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '0px';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_sidemenu_bg($css, $value) {
    $tag = '[[setting:sidemenu_bg]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_loginpagebg($css, $value) {
    global $CFG, $PAGE;

    $tag = '[[setting:loginpagebg]]';

    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = $CFG->wwwroot."/theme/".$PAGE->theme->name."/pix/default-login-bg.jpg";
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_slide_title_color($css, $value) {
    $tag = '[[setting:slide_title_color]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_slide_text_color($css, $value) {
    $tag = '[[setting:slide_text_color]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_slide_txt_bg($css, $value) {
    $tag = '[[setting:slide_txt_bg]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_shafla_set_header_bg($css, $value) {
    $tag = '[[setting:header_bg]]';
    $replacement = $value;
    if (is_null($replacement)) {
        $replacement = '#333';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}