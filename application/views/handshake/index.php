
<div class="container">

	<?php 

	echo form_open('handshake_controller/Result');

	?>

	<div class="form-group">

		<label for="directors" style="color: #000; font-weight: bold">Enter number of Directors: </label>

		<?php 		

		$data = array(
			'type' => '',
			'name' => 'directors',
			'id' => 'directors',
			'class' => 'form-control mr-sm-2',
			'style' => 'width: 50%',
			'placeholder' => 'eg. 1, 2, 3 ...'
		);

		echo form_input($data);

		?>

		<?php 
		$data_submit = array(
			'type' => 'submit',
			'name' => 'submit',
			'id' => 'handshakes',
			'class' => 'btn btn-primary',
			'value' => 'handshakes'
		);
		echo form_submit($data_submit);

		 ?>

		<div id="show_message" class="message">

		</div>

		<?php 

		echo form_close();

		?>


	</div>

</div>