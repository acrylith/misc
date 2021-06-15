<?php
require 'wp-load.php';

$user = get_user_by( 'login', 'Admin' );
if ( $user ) {
	wp_set_password( '12345', $user->ID );
	echo 'New password set.';
} else {
	echo 'Error: User not found.';
}
?>