
<div class="container">
	

	<?php echo form_open('trophy_controller/getResult'); ?>

	<?php echo form_fieldset('Trophy Cost Estimator'); ?>
	<label for="trophy-shapes">Select the Shape for the Trophy</label>

	<select name="shape-list" id="" class="form-control" required>
		<option value=""></option>
		<?php 	
		foreach ($trophy_shape as $shape) {
			?>
			<option value="<?php 
				echo $shape->shape; 
				?>">
				<?php 
				echo $shape->shape; 
				?>
			</option>
			<?php 
		}
		?>
	</select>
	<label for="trophy-metal">Select Metal for the Trophy</label>

	<select name="metal-list" id="" class="form-control" required>
		<option value=""></option>
		<?php 
		foreach($metal as $metal_list){
			?>
			<option value="<?php echo $metal_list->metal; ?>"><?php echo $metal_list->metal; ?></option>

			<?php } ?>
		</select>

		<label for="trophy-purity"> Purity Percentage for Metal</label>

		<?php 

		$purity_input = array(
			'type' => 'number',
			'class' => 'form-control',
			'id' => 'trophy-purity',
			'name' => 'trophy-purity',
			'placeholder' => 'Enter purity percent for metal',
			'required' => 'required'
		);

		echo form_input($purity_input);
		?>

		<label for="trophy-element">Select coating Element for the Trophy</label>
		<select name="element-list" id="" class="form-control" required>

			<option value=""></option>
			<?php 
			foreach($element as $element_list){
				?>
				<option value="<?php echo $element_list->element; ?>"><?php echo $element_list->element; ?></option>

				<?php } ?>

			</select>

			<label for="trophy-thickness"> Coating thickness for element</label>

			<?php 

			$thickness_input = array(
				'type' => 'number',
				'class' => 'form-control',
				'id' => 'trophy-thickness',
				'name' => 'trophy-thickness',
				'placeholder' => 'Enter thickness for coating element',
				'required' => 'required'
			);

			echo form_input($thickness_input);
			?>

			<label for="trophy-length"> Length of Trophy</label>

			<?php 

			$length_input = array(
				'type' => 'number',
				'class' => 'form-control',
				'id' => 'trophy-length',
				'name' => 'trophy-length',
				'placeholder' => 'Enter length for trophy',
				'required' => 'required'
			);

			echo form_input($length_input);

			?>

			<label for="trophy-height"> Height of Trophy</label>

			<?php 

			$height_input = array(
				'type' => 'number',
				'class' => 'form-control',
				'id' => 'trophy-height',
				'name' => 'trophy-height',
				'placeholder' => 'Enter height for trophy',
				'required' => 'required'
			);

			echo form_input($height_input);

			?>
			<label for="trophy-width"> Width of Trophy</label>

			<?php 

			$width_input = array(
				'type' => 'number',
				'class' => 'form-control',
				'id' => 'trophy-width',
				'name' => 'trophy-width',
				'placeholder' => 'Enter width for trophy',
				'required' => 'required'
			);

			echo form_input($width_input);

			?>

			<label for="trophy-Radius"> Radius of Trophy</label>

			<?php 

			$radius_input = array(
				'type' => 'number',
				'class' => 'form-control',
				'id' => 'trophy-radius',
				'name' => 'trophy-radius',
				'placeholder' => 'Enter radius for trophy',
				'required' => 'required'
			);

			echo form_input($radius_input);

			?>

			<?php 

			$calculate = array(
				'id' => 'calculate',
				'class' => 'btn btn-primary',
				'name'=>'calculate',
				'value'=>'Calculate'
			);
			echo form_submit($calculate);

			?>

			<?php echo form_fieldset_close(); ?>

			<?php echo form_close(); ?>

		</div>