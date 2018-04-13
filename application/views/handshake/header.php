<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= "Handshake programe" ?></title>


	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

	<script type="text/javascript">
		$( document ).ready( function () {

			$( '#handshakes' ).click( function ( event ) {

				event.preventDefault();

				var number = $( "input#directors" ).val();

				$.ajax( {
					type: "post",
					url: " <?= base_url('handshake_controller/Result'); ?>",
					data: {
						directors: number
					},
					dataType: "JSON",
					success: function ( data ) {
						$( "#show_message" ).html( "executed successfully" );
						$( "#show_message" ).addClass( "alert alert-success" );

					},
					error: function ( err ) {
						$( "#show_message" ).html( "check your field input" );
						$( "#show_message" ).addClass( "text text-danger" );
					}

				} );
			} );
		} );
	</script>


</head>

<body>
	