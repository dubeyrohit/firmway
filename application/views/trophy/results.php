<div class="container">
	<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
		<div class="card-header">Sample Output</div>
		<div class="card-body">	
			<h4 class="card-title">Costs</h4>
			<?php 

			foreach ($metal_cost as $cost) {

				echo '<p class="card-text"><strong>Cost of your selected Metal is: '. $cost->cost.'</strong></p>';
			}?>
			<div class="row">
				<?php 
				foreach($element_cost as $cost)
				{
					echo "<strong>Cost of your selected coating element is: ".$cost->cost."</strong>";
				}

				?>
			</div>
			<p class="card-text"><?php echo "The Shape you have selected: ".$trophy_shape; ?></p>
			<p class="card-text"><?php echo "The Metal you have selected: ".$trophy_metal; ?></p>
			<p class="card-text"><?php echo "The Element you have selected: ".$trophy_element; ?></p>
			<p class="card-text"><?php echo "The Purity percentage you have selected: ".$trophy_purity; ?></p>
			<p class="card-text"><?php echo "The thickness you have selected: ".$trophy_thickness; ?></p>
			<p class="card-text"><?php echo "The length you have selected: ".$trophy_length; ?></p>
			<p class="card-text"><?php echo "The width you have selected: ".$trophy_width; ?></p>
			<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
		</div>
		<ul class="nav nav-pills flex-column">
			<li class="nav-item">
				<a class="nav-link active" href="<?php echo base_url('trophy_controller'); ?>">Re Calculate</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li> -->

		</ul>
	</div>

</div>