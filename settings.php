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
 * Theme Shafla settings
 *
 * @package    theme_shafla
 * @copyright  2017 Shafla Team | http://shafla.pl/
 * @copyright  Theme based on Theme Clean - Moodle 3.1
 * @author  2017 Shafla Team | http://shafla.pl/
 * @author  Theme based on Theme Clean - Moodle 3.1
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

defined('MOODLE_INTERNAL') || die;
global $PAGE;

$ADMIN->add('themes', new admin_category('theme_shafla', 'Shafla Theme Settings'));

// -- SLIDESHOW

$temp = new admin_settingpage('theme_shafla_settings_slideshow', get_string('slideshow', 'theme_shafla'));

$name = 'theme_shafla/slidesamount';
$title = get_string('slidesamount' , 'theme_shafla');
$description = get_string('slidesamountdesc', 'theme_shafla');
$default = '0';
$choices = array(
  '0' => 'Disable slideshow',
  '1' => '1',
  '2' => '2',
  '3' => '3',
  '4' => '4',
  '5' => '5',
  '6' => '6',
  '7' => '7',
  '8' => '8',
  '9' => '9',
  '10' => '10'
  );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

  $name = 'theme_shafla/slide_title_color';
  $title = get_string('slide_title_color', 'theme_shafla');
  $description = get_string('slide_title_color_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/slide_text_color';
  $title = get_string('slide_text_color', 'theme_shafla');
  $description = get_string('slide_text_color_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/slide_txt_bg';
  $title = get_string('slide_txt_bg', 'theme_shafla');
  $description = get_string('slide_txt_bg_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);


if (!empty($PAGE->theme->settings->slidesamount)) {
  if ($PAGE->theme->settings->slidesamount > 0) {
    for ($i = 1; $i <= $PAGE->theme->settings->slidesamount; $i++) {
            
      $name = 'theme_shafla/slide'.$i;
      $title = get_string('slide'.$i, 'theme_shafla');
      $description = get_string('slide'.$i.'desc', 'theme_shafla');
      $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide'.$i);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/slide'.$i.'title';
      $title = get_string('slide'.$i.'title', 'theme_shafla');
      $description = get_string('slide'.$i.'titledesc', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/slide'.$i.'text';
      $title = get_string('slide'.$i.'text', 'theme_shafla');
      $description = get_string('slide'.$i.'textdesc', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/slide'.$i.'link';
      $title = get_string('slide'.$i.'link', 'theme_shafla');
      $description = get_string('slide'.$i.'linkdesc', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

    }
  }
}

$ADMIN->add('theme_shafla', $temp);

// -- SOCIAL

$temp = new admin_settingpage('theme_shafla_social',  get_string('social', 'theme_shafla'));

  $name = 'theme_shafla/sfacebook';
  $title = get_string('sfacebook', 'theme_shafla');
  $description = get_string('sfacebook_desc', 'theme_shafla');
  $default = '';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/slinkedin';
  $title = get_string('slinkedin', 'theme_shafla');
  $description = get_string('slinkedin_desc', 'theme_shafla');
  $default = '';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/sgplus';
  $title = get_string('sgplus', 'theme_shafla');
  $description = get_string('sgplus_desc', 'theme_shafla');
  $default = '';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/twitter';
  $title = get_string('twitter', 'theme_shafla');
  $description = get_string('twitter_desc', 'theme_shafla');
  $default = '';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/social_bg';
  $title = get_string('social_bg', 'theme_shafla');
  $description = get_string('social_bg_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/social_color';
  $title = get_string('social_color', 'theme_shafla');
  $description = get_string('social_color_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);

// -- HEADER

$temp = new admin_settingpage('theme_shafla_header',  get_string('header', 'theme_shafla'));

    $name = 'theme_shafla/logo';
    $title = get_string('logo','theme_shafla');
    $description = get_string('logo_desc', 'theme_shafla');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_shafla/header_bg';
    $title = get_string('header_bg', 'theme_shafla');
    $description = get_string('header_bg_desc', 'theme_shafla');
    $default = '#333';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);

// -- COPYRIGHTS

$temp = new admin_settingpage('theme_shafla_copyright',  get_string('copyright', 'theme_shafla'));

  $name = 'theme_shafla/copyright_txt';
  $title = get_string('copyright_txt', 'theme_shafla');
  $description = get_string('copyright_txt_desc', 'theme_shafla');
  $default = 'Shafla Theme ®';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/copyright_bg';
  $title = get_string('copyright_bg', 'theme_shafla');
  $description = get_string('copyright_bg_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/copyright_color';
  $title = get_string('copyright_color', 'theme_shafla');
  $description = get_string('copyright_color_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);

// -- FOOTER

$temp = new admin_settingpage('theme_shafla_footer',  get_string('footer', 'theme_shafla'));

  $name = 'theme_shafla/footer_bg';
  $title = get_string('footer_bg', 'theme_shafla');
  $description = get_string('footer_bg_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);

// -- FP TOP GRID

$temp = new admin_settingpage('theme_shafla_settings_fptopgrid', get_string('fptopgrid', 'theme_shafla'));

$name = 'theme_shafla/fptopgridamount';
$title = get_string('fptopgridamount' , 'theme_shafla');
$description = get_string('fptopgridamountdesc', 'theme_shafla');
$default = '0';
$choices = array(
  '0' => 'Disable front page top grid',
  '1' => '1',
  '2' => '2',
  '3' => '3'
  );
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_shafla/fptopgriddesktop';
$title = get_string('fptopgriddesktop', 'theme_shafla');
$description = get_string('griddescinfo', 'theme_shafla');
$default = '0';
$choices = array(
'0' => '0',
'1' => '1',
'2' => '2',
'3' => '3'
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_shafla/fptopgridtab';
$title = get_string('fptopgridtab', 'theme_shafla');
$description = get_string('griddescinfo', 'theme_shafla');
$default = '0';
$choices = array(
'0' => '0',
'1' => '1',
'2' => '2',
'3' => '3'
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_shafla/fptopgridmobile';
$title = get_string('fptopgridmobile', 'theme_shafla');
$description = get_string('griddescinfo', 'theme_shafla');
$default = '0';
$choices = array(
'0' => '0',
'1' => '1',
'2' => '2',
'3' => '3'
);
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

if (!empty($PAGE->theme->settings->fptopgridamount)) {
  if ($PAGE->theme->settings->fptopgridamount > 0) {
    for ($i = 1; $i <= $PAGE->theme->settings->fptopgridamount; $i++) {
            
      // $name = 'theme_shafla/fptopgrid'.$i.'img';
      // $title = get_string('fptopgrid'.$i.'img', 'theme_shafla');
      // $description = get_string('fptopgrid'.$i.'imgdesc', 'theme_shafla');
      // $setting = new admin_setting_configstoredfile($name, $title, $description, 'fptopgrid'.$i.'img');
      // $setting->set_updatedcallback('theme_reset_all_caches');
      // $temp->add($setting);

      $name = 'theme_shafla/fptopgrid'.$i.'title';
      $title = get_string('fptopgrid'.$i.'title', 'theme_shafla');
      $description = get_string('fptopgrid'.$i.'title', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fptopgrid'.$i.'text';
      $title = get_string('fptopgrid'.$i.'text', 'theme_shafla');
      $description = get_string('fptopgrid'.$i.'text', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fptopgrid'.$i.'btn';
      $title = get_string('fptopgrid'.$i.'btn', 'theme_shafla');
      $description = get_string('fptopgrid'.$i.'btn', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

    }
  }
}

$ADMIN->add('theme_shafla', $temp);

// -- FP BOTTOM GRID

$temp = new admin_settingpage('theme_shafla_settings_fpbottomgrid', get_string('fpbottomgrid', 'theme_shafla'));

      $name = 'theme_shafla/fpbottomgridamount';
      $title = get_string('fpbottomgridamount' , 'theme_shafla');
      $description = get_string('fpbottomgridamountdesc', 'theme_shafla');
      $default = '0';
      $choices = array(
        '0' => 'Disable front page bottom grid',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12'
        );
      $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fpbottomgriddesktop';
      $title = get_string('fpbottomgriddesktop', 'theme_shafla');
      $description = get_string('griddescinfo', 'theme_shafla');
      $default = '0';
      $choices = array(
      '0' => '0',
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5'
      );
      $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fpbottomgridtab';
      $title = get_string('fpbottomgridtab', 'theme_shafla');
      $description = get_string('griddescinfo', 'theme_shafla');
      $default = '0';
      $choices = array(
      '0' => '0',
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5'
      );
      $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fpbottomgridmobile';
      $title = get_string('fpbottomgridmobile', 'theme_shafla');
      $description = get_string('griddescinfo', 'theme_shafla');
      $default = '0';
      $choices = array(
      '0' => '0',
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5'
      );
      $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

if (!empty($PAGE->theme->settings->fpbottomgridamount)) {
  if ($PAGE->theme->settings->fpbottomgridamount > 0) {
    for ($i = 1; $i <= $PAGE->theme->settings->fpbottomgridamount; $i++) {
            
      $name = 'theme_shafla/fpbottomgrid'.$i.'img';
      $title = get_string('fpbottomgrid'.$i.'img', 'theme_shafla');
      $description = get_string('fpbottomgrid'.$i.'imgdesc', 'theme_shafla');
      $setting = new admin_setting_configstoredfile($name, $title, $description, 'fpbottomgrid'.$i.'img');
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fpbottomgrid'.$i.'title';
      $title = get_string('fpbottomgrid'.$i.'title', 'theme_shafla');
      $description = get_string('fpbottomgrid'.$i.'title', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fpbottomgrid'.$i.'text';
      $title = get_string('fpbottomgrid'.$i.'text', 'theme_shafla');
      $description = get_string('fpbottomgrid'.$i.'text', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

      $name = 'theme_shafla/fpbottomgrid'.$i.'btn';
      $title = get_string('fpbottomgrid'.$i.'btn', 'theme_shafla');
      $description = get_string('fpbottomgrid'.$i.'btn', 'theme_shafla');
      $default = '';
      $setting = new admin_setting_configtext($name, $title, $description, $default);
      $setting->set_updatedcallback('theme_reset_all_caches');
      $temp->add($setting);

    }
  }
}

$ADMIN->add('theme_shafla', $temp);

// -- PARALLAX

$temp = new admin_settingpage('theme_shafla_parallax',  get_string('parallax', 'theme_shafla'));

  $name = 'theme_shafla/parallaximg';
  $title = get_string('parallaximg','theme_shafla');
  $description = get_string('parallax_desc', 'theme_shafla');
  $setting = new admin_setting_configstoredfile($name, $title, $description, 'parallaximg');
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/parallaxheight';
  $title = get_string('parallaxheight', 'theme_shafla');
  $description = get_string('parallaxheight_desc', 'theme_shafla');
  $default = '300px';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

  $name = 'theme_shafla/parallaxmargin';
  $title = get_string('parallaxmargin', 'theme_shafla');
  $description = get_string('parallaxmargin_desc', 'theme_shafla');
  $default = '0px';
  $setting = new admin_setting_configtext($name, $title, $description, $default);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);

// -- SIDE MENU

$temp = new admin_settingpage('theme_shafla_sidemenu',  get_string('sidemenu', 'theme_shafla'));

  $name = 'theme_shafla/sidemenu_bg';
  $title = get_string('sidemenu_bg', 'theme_shafla');
  $description = get_string('sidemenu_bg_desc', 'theme_shafla');
  $default = '#ffffff';
  $previewconfig = null;
  $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);

// -- LOGIN PAGE

$temp = new admin_settingpage('theme_shafla_loginpage',  get_string('loginpage', 'theme_shafla'));

  $name = 'theme_shafla/loginpagebg';
  $title = get_string('loginpagebg','theme_shafla');
  $description = get_string('loginpagebg_desc', 'theme_shafla');
  $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginpagebg');
  $setting->set_updatedcallback('theme_reset_all_caches');
  $temp->add($setting);

$ADMIN->add('theme_shafla', $temp);