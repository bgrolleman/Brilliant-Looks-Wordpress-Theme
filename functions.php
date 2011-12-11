<?php
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/logo.png'); // %s is the template dir uri
define('HEADER_IMAGE_WIDTH', 746); // use width and height appropriate for your theme
define('HEADER_IMAGE_HEIGHT', 128);

if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
			));
}
if ( function_exists('register_nav_menu') ) {
	add_theme_support('menus');
	register_nav_menu('footer','Links for the bottom of the page');
}

// gets included in the site header
function header_style() {
    ?><style type="text/css">
        #header {
            background: url(<?php header_image(); ?>);
        }
    </style><?php
}
// gets included in the admin header
function admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
}
add_custom_image_header('header_style', 'admin_header_style');


?>

