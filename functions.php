<?php

require_once( 'lib/helpers.php' );
require_once( 'lib/enqueue-assets.php' );
require_once( 'lib/acf.php' );


function after_pagination() {
	echo 'this is a text';
}

add_action( 'juliagarcin_after_pagination' , 'after_pagination' )

?>
