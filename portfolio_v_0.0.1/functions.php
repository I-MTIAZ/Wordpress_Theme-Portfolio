<?php
add_theme_support('title-tag');

function imtiaz_css_add_reg()
{
  wp_enqueue_style('imtiaz_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'imtiaz_css_add_reg');


function imtiaz_customizer_portfoli($wp_customize)
{

  /*========================
 For profile information
 ======================== */

  /*  Profile Area */

  $wp_customize->add_section('imt_profile_area', array(
    'title' => __('Profile AREA', 'imthoss'),
    'description' => 'Change your Profile'
  ));

  include 'file.php';
  //profile img customize
  $wp_customize->add_setting('imt-profile-img', array(
    'default' => $profile_img,
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imt-profile-img', array(
    'label' => 'Change profile picture',
    'setting' => 'imt-profile-img',
    'section' => 'imt_profile_area'
  )));

  //Profile name customize
  $wp_customize->add_setting('imt-profile-name', array(
    'default' => 'Imtiaz Hossain',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imt-profile-name', array(
    'label' => 'Change profile Name',
    'setting' => 'imt-profile-name',
    'section' => 'imt_profile_area',
    'type' => 'textarea'
  )));

  //Profile tag customize
  $wp_customize->add_setting('imt-profile-tag', array(
    'default' => 'Software Engineer',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'imt-profile-tag', array(
    'label' => 'Change profile Tag',
    'setting' => 'imt-profile-tag',
    'section' => 'imt_profile_area',
    'type' => 'textarea'
  )));

  /*  Profile Address*/

  $wp_customize->add_section('imt_profile_address', array(
    'title' => __('Profile Address', 'imthoss'),
    'description' => 'Change your Address'
  ));

  // Profile Address customize

  for ($i = 0; $i < 3; $i++) {
    $wp_customize->add_setting($adrs_custom_area[$i], array(
      'default' => $adrs_title[$i],
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $adrs_custom_area[$i], array(
      'label' => 'Change ' . $adrs_label[$i],
      'setting' => $adrs_custom_area[$i],
      'section' => 'imt_profile_address',
      'type' => 'textarea'
    )));
  }

  /*  Profile Skill */

  $wp_customize->add_section('imt_profile_skill', array(
    'title' => __('Profile Skill', 'imthoss'),
    'description' => 'Change your Skill'
  ));

  for ($i = 0; $i < 3; $i++) {

    // skill image area

    $wp_customize->add_setting($skill_img_cust_area[$i], array(
      'default' => $skill_img,
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $skill_img_cust_area[$i], array(
      'label' => 'Change Your Skill Image',
      'setting' => $skill_img_cust_area[$i],
      'section' => 'imt_profile_skill',
    )));

    // skill text area

    $wp_customize->add_setting($skill_text_cust_area[$i], array(
      'default' => $skill_text
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $skill_text_cust_area[$i], array(
      'label' => 'Change Your Skill Text',
      'setting' => $skill_text_cust_area[$i],
      'section' => 'imt_profile_skill',
      'type' => 'textarea'
    )));
  }

  /*  Profile Footer */

  $wp_customize->add_section('imt_profile_footer', array(
    'title' => __('Profile Footer', 'imthoss'),
    'description' => 'Change Your Footer'
  ));

  for ($i = 0; $i < 4; $i++) {
    $wp_customize->add_setting($foter_img_cust_area[$i], array(
      'default' => $foter_img
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $foter_img_cust_area[$i], array(
      'label' => 'Change Your Footer Logo',
      'setting' => $foter_img_cust_area[$i],
      'section' => 'imt_profile_footer',
    )));
  }

 /*========================
 For Banner & Title information
 ======================== */

  /* For Banner */

  $wp_customize->add_section('imt_banner', array(
    'title' => __('Banner & Title', 'imthoss'),
    'description' => 'Change Your Banner & Title'
  ));
  //Banner Title 1 area

  $wp_customize->add_setting('banner_title_cust_area1', array(
    'default' => $banner_title1
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_title_cust_area1', array(
    'label' => 'Change Your Banner Title First Part',
    'setting' => 'banner_title_cust_area1',
    'section' => 'imt_banner',
    'type' => 'text'
  )));

  //Banner Title 2 area

  $wp_customize->add_setting('banner_title_cust_area2', array(
    'default' => $banner_title2
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_title_cust_area2', array(
    'label' => 'Change Your Banner Title Middle Part',
    'setting' => 'banner_title_cust_area2',
    'section' => 'imt_banner',
    'type' => 'text'
  )));

  //Banner Title 3 area

  $wp_customize->add_setting('banner_title_cust_area3', array(
    'default' => $banner_title3
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner_title_cust_area3', array(
    'label' => 'Change Your Banner Title Last Part',
    'setting' => 'banner_title_cust_area3',
    'section' => 'imt_banner',
    'type' => 'text'
  )));

  // bannaer image area

  $wp_customize->add_setting('ban_img_cust_area', array(
    'default' => $banner_img
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ban_img_cust_area', array(
    'label' => 'Change Your Banner Image 1',
    'setting' => 'ban_img_cust_area',
    'section' => 'imt_banner',
  )));

  //banner text area

  $wp_customize->add_setting('ban_txt_cust_area', array(
    'default' => $banner_text
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ban_txt_cust_area', array(
    'label' => 'Change Your Banner Text 1',
    'setting' => 'ban_txt_cust_area',
    'section' => 'imt_banner',
    'type' => 'text'
  )));

  //banner para area
  $wp_customize->add_setting('ban_para_cust_area', array(
    'default' => $banner_para
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ban_para_cust_area', array(
    'label' => 'Change Your Banner Paragraph 1',
    'setting' => 'ban_para_cust_area',
    'section' => 'imt_banner',
    'type' => 'textarea'
  )));
  //for banner problem it has done individualy

  for ($i = 0; $i < count($ban_img_cust_area); $i++) {
      //banner image area
    $wp_customize->add_setting($ban_img_cust_area[$i], array(
      'default' => $banner_img
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $ban_img_cust_area[$i], array(
      'label' => 'Change Your Banner Image ' . $i + 2,
      'setting' => $ban_img_cust_area[$i],
      'section' => 'imt_banner',
    )));
  
      //banner text area
    $wp_customize->add_setting($ban_txt_cust_area[$i], array(
      'default' => $banner_text
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $ban_txt_cust_area[$i], array(
      'label' => 'Change Your Banner Text ' . $i + 2,
      'setting' => $ban_txt_cust_area[$i],
      'section' => 'imt_banner',
      'type' => 'text'
    )));
  
      //banner para area
    $wp_customize->add_setting($ban_para_cust_area[$i], array(
      'default' => $banner_para
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $ban_para_cust_area[$i], array(
      'label' => 'Change Your Banner Paragraph ' . $i + 2,
      'setting' => $ban_para_cust_area[$i],
      'section' => 'imt_banner',
      'type' => 'textarea'
    )));
  }


  /*========================
 For Service information
 ======================== */
  $wp_customize->add_section('imt_service', array(
    'title' => __('Service Card', 'imthoss'),
    'description' => 'Change Your Service'
  ));

  for ($i = 0; $i < count($serv_img_cust_area); $i++) {
    // service image area
    $wp_customize->add_setting($serv_img_cust_area[$i], array(
      'default' => $service_img
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $serv_img_cust_area[$i], array(
      'label' => 'Change Your Service Image ' . $i + 1,
      'setting' => $serv_img_cust_area[$i],
      'section' => 'imt_service',
    )));

    // service text area

    $wp_customize->add_setting($serv_text_cust_area[$i], array(
      'default' => $service_text
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $serv_text_cust_area[$i], array(
      'label' => 'Change Your Service Text ' . $i + 1,
      'setting' => $serv_text_cust_area[$i],
      'section' => 'imt_service',
      'type' => 'textarea'
    )));

    // service Button text area

    $wp_customize->add_setting($serv_btn_cust_area[$i], array(
      'default' => $service_butn_text
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $serv_btn_cust_area[$i], array(
      'label' => 'Change Your Service Button Text ' . $i + 1,
      'setting' => $serv_btn_cust_area[$i],
      'section' => 'imt_service',
      'type' => 'text'
    )));

    // service Button LINK area

    $wp_customize->add_setting($serv_link_cust_area[$i]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $serv_link_cust_area[$i], array(
      'label' => 'Change Your Service Button Link ' . $i + 1,
      'setting' => $serv_link_cust_area[$i],
      'section' => 'imt_service',
      'type' => 'link'
    )));
  }

  /*========================
 For Project information
 ======================== */
  $wp_customize->add_section('imt_project', array(
    'title' => __('Project Card', 'imthoss'),
    'description' => 'Change Your Project'
  ));

  for ($i = 0; $i < count($proj_img_cust_area); $i++) {
    // project image area
    $wp_customize->add_setting($proj_img_cust_area[$i], array(
      'default' => $project_img
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $proj_img_cust_area[$i], array(
      'label' => 'Change Your Project Image ' . $i + 1,
      'setting' => $proj_img_cust_area[$i],
      'section' => 'imt_project',
    )));

    // project text area

    $wp_customize->add_setting($proj_text_cust_area[$i], array(
      'default' => $project_text
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $proj_text_cust_area[$i], array(
      'label' => 'Change Your Project Text ' . $i + 1,
      'setting' => $proj_text_cust_area[$i],
      'section' => 'imt_project',
      'type' => 'textarea'
    )));

    // project Button text area

    $wp_customize->add_setting($proj_btn_cust_area[$i], array(
      'default' => $project_butn_text
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $proj_btn_cust_area[$i], array(
      'label' => 'Change Your Project Button Text ' . $i + 1,
      'setting' => $proj_btn_cust_area[$i],
      'section' => 'imt_project',
      'type' => 'text'
    )));

    // project Button LINK area

    $wp_customize->add_setting($proj_link_cust_area[$i]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $proj_link_cust_area[$i], array(
      'label' => 'Change Your Project Button Link ' . $i + 1,
      'setting' => $proj_link_cust_area[$i],
      'section' => 'imt_project',
      'type' => 'link'
    )));
  }
 

/*========================
 For Quote / Comment
 ======================== */

 $wp_customize->add_section('imt_comment', array(
  'title' => __('Quote /Comment', 'imthoss'),
  'description' => 'Change Your Quote'
));
// singe comment image area

$wp_customize->add_setting('cmnt_img_cust_area', array(
  'default' => $comment_img
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cmnt_img_cust_area', array(
  'label' => 'Change Your Banner Image 1',
  'setting' => 'cmnt_img_cust_area',
  'section' => 'imt_comment',
)));
// singe comment text area
$wp_customize->add_setting('cmnt_txt_cust_area', array(
  'default' => $comment_text
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cmnt_txt_cust_area', array(
  'label' => 'Change Your Banner Text 1',
  'setting' => 'cmnt_txt_cust_area',
  'section' => 'imt_comment',
  'type' => 'text'
)));
// singe comment para area
$wp_customize->add_setting('cmnt_para_cust_area', array(
  'default' => $comment_para
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'cmnt_para_cust_area', array(
  'label' => 'Change Your Banner Paragraph 1',
  'setting' => 'cmnt_para_cust_area',
  'section' => 'imt_comment',
  'type' => 'textarea'
)));

//for comment problem it has done individualy

for ($i = 0; $i < count($cmnt_img_cust_area); $i++) {
  //comment image area
  $wp_customize->add_setting($cmnt_img_cust_area[$i], array(
    'default' => $comment_img
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $cmnt_img_cust_area[$i], array(
    'label' => 'Change Your Banner Image ' . $i + 2,
    'setting' => $cmnt_img_cust_area[$i],
    'section' => 'imt_comment',
  )));


//comment text area

  $wp_customize->add_setting($cmnt_txt_cust_area[$i], array(
    'default' => $comment_text
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $cmnt_txt_cust_area[$i], array(
    'label' => 'Change Your Banner Text ' . $i + 2,
    'setting' => $cmnt_txt_cust_area[$i],
    'section' => 'imt_comment',
    'type' => 'text'
  )));


//comment para area

  $wp_customize->add_setting($cmnt_para_cust_area[$i], array(
    'default' => $comment_para
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $cmnt_para_cust_area[$i], array(
    'label' => 'Change Your Banner Paragraph ' . $i + 2,
    'setting' => $cmnt_para_cust_area[$i],
    'section' => 'imt_comment',
    'type' => 'textarea'
  )));
}

/*========================
For Nav & Main Footer
 ======================== */
 $wp_customize->add_section('imt_nav_footer', array(
  'title' => __('Nav & Main Footer', 'imthoss'),
  'description' => 'Change Your Nav & Main Footer'
));

// NAV bar
 $wp_customize->add_setting('nav_name_imt', array(
  'default' => $nav_name
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nav_name_imt', array(
  'label' => 'Change Your Nav Text',
  'setting' => 'nav_name_imt',
  'section' => 'imt_nav_footer',
  'type' => 'text'
)));
// Main Footer
$wp_customize->add_setting('main_footer_imt', array(
  'default' => $main_footer
));

$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'main_footer_imt', array(
  'label' => 'Change Your Main Footer Text',
  'setting' => 'main_footer_imt',
  'section' => 'imt_nav_footer',
  'type' => 'textarea'
)));


}

add_action('customize_register', 'imtiaz_customizer_portfoli');
