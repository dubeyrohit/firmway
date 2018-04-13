<div class="container">
	<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
		<div class="card-header">Output</div>
		<div class="card-body">	
			<h4 class="card-title">Number of Test Cases</h4>
			<?php 
			// following variable holds the given input from users.
			$no_of_directors = $this->input->post('directors');

			if(empty($no_of_directors) || $no_of_directors <=0 ){
				?>
				<p class="card-text">No case test available for 0 or below or for empty <br /></p>
				<!-- echo "No case test available for 0 or below or for empty <br />"; -->
				<?php
				echo "Thank You for Testing :)";
			}
			for($i=1; $i <= $no_of_directors; $i++){

		$num = $i*($i-1)/2; // will calculate no of handshakes takes place

		echo "Case".$i.":if There are <strong> ".$i."</strong> board members,<strong>".$num."</strong> handshake takes place<br />";

	}
	?>		
	<ul class="nav nav-pills flex-column">
			<li class="nav-item">
				<a class="nav-link active" href="<?php echo base_url('handshake_controller'); ?>">Re Test</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li> -->

		</ul>

	<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
</div>
</div>

</div>