<script>
setTimeout(function() {
	$('.alert').delay(2000).slideUp(300);
});

</script>

<?php

use App\Helpers\Validation;
use App\Helpers\Tools;


if( count( Validation::errors() ) ){

	print '<div class="alert alert-danger mb-0">';

	print '<ul class="list-unstyled">';

		foreach( Validation::errors() as $error ) {

				print '<li><i class="fa fa-times"></i> '.$error.'</li>';

		}

	print '</ul></div>';

	unset( $_SESSION[SESSION.'errors'] );

 }

 if( count( Tools::flashes() ) ){

	print '<div class="alert alert-success mb-0">';

	print '<ul class="list-unstyled">';

		foreach( Tools::flashes() as $flash ) {

				print '<li>'.$flash.' <i class="fa fa-check"></i></li>';

		}

	print '</ul></div>';

	unset( $_SESSION[SESSION.'flash'] );


 }
