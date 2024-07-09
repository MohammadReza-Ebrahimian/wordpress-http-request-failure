To ban All Http Request in wordpress Admin Panel, Add below code to wp-config.php file:

define( 'WP_HTTP_BLOCK_EXTERNAL', TRUE );


To Allow some wanted API work, Add below code to wp-config.php file:

define( 'WP_ACCESSIBLE_HOSTS', 'mihanwp.com, wordpress.org' );
