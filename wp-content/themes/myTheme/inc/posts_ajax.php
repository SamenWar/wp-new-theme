<?php
add_action('wp_ajax_hello', 'say');
function say(){
	if(empty($_POST['name'])){
		$name = 'customer';
	}else {
		$name = esc_attr($_POST['name']);
	}
	echo "hello $name ";
	wp_die();
}

 //add_action( 'admin_print_scripts', 'my_action_javascript' ); // такое подключение будет работать не всегда
add_action( 'admin_print_footer_scripts', 'my_action_javascript', 99 );
function my_action_javascript() {
	?>
	<script>
	jQuery(document).ready( function( $ ){
		var data = {
			action: 'hello',
			name: 'sam'
		};

		// с версии 2.8 'ajaxurl' всегда определен в админке
		jQuery.post( ajaxurl, data, function( response ){
			alert( 'Получено с сервера: ' + response );
		} );
	} );
	</script>
	<?php
}
?>
