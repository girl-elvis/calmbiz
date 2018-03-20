<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// End sage stuff.
add_filter( 'private_title_format', 'myprefix_private_title_format' );
add_filter( 'protected_title_format', 'myprefix_private_title_format' );

function myprefix_private_title_format( $format ) {
    return '%s';
}



function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader

    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );






function custom_password_cookie_expiry( $expires ) {
    return 0;  // Make it a session cookie
}
add_filter( 'post_password_expires', 'custom_password_cookie_expiry' );


/**
 * Clear the Post Password Cookie on logout.
 *
 * @link http://wordpress.stackexchange.com/a/198890/26350
 */
add_action( 'clear_auth_cookie', function()
{    
    setcookie(  
       'wp-postpass_' . COOKIEHASH, 
       '', 
       time() - YEAR_IN_SECONDS, 
       COOKIEPATH, 
       COOKIE_DOMAIN 
    );
});



// Password Form


function cc_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="uk-form">
    ' . __( "To view this protected page, enter the password below:" ) . '
    <input name="post_password" class="uk-input" id="' . $label . '" type="password" size="20" maxlength="20" placeholder="Enter Password"  /><input type="submit" class="uk-button uk-button-default" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'cc_password_form' );
?>