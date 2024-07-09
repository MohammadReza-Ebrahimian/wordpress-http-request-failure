<!-- To bann the Http Requests to Core of wordpress or plugins, add the Line below to your wp-config.php file.
this will bann All Http Requests. -->

define( 'WP_HTTP_BLOCK_EXTERNAL', TRUE );


<!-- To Allow some wanted API work, Add also below code to your wp-config.php file. -->

define( 'WP_ACCESSIBLE_HOSTS', 'example.com, wordpress.org' );

