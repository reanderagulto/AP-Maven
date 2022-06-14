<?php 

/*
 * Register sidebars
 */
function register_ai_child_starter_theme_sidebars() {
	
	register_sidebar(array( 
	   'name' => 'My Custom Sidebar',
	   'id'=>'my-custom-sidebar',
	   'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
    ));

    register_sidebar(array( 
        'name' => 'AP Maven Logo',
        'id'=>'ap-maven-logo',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
     ));

     register_sidebar(array( 
      'name' => 'AP Homepage Banner Slider',
      'id'=>'ap-maven-homepage-banner-slider',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));

   register_sidebar(array( 
      'name' => 'AP Homepage Banner Text',
      'id'=>'ap-maven-homepage-banner-text',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));

   register_sidebar(array( 
      'name' => 'AP Welcome Section Content',
      'id'=>'ap-maven-welcome-section-content',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));

   register_sidebar(array( 
      'name' => 'AP Welcome Section Image',
      'id'=>'ap-maven-welcome-section-image',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));

   register_sidebar(array( 
      'name' => 'AP Featured Properties',
      'id'=>'ap-maven-featured-properties',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));

   register_sidebar(array( 
      'name' => 'AP Featured Communities',
      'id'=>'ap-maven-featured-communities',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));

   register_sidebar(array( 
      'name' => 'AP Homepage Testimonials',
      'id'=>'ap-maven-homepage-testimonials',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
   ));
	
}