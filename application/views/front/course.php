<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Courses</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
		<?php foreach($lang->result() as $langs){ ?>
			<h3><?php echo $langs->language;?></h3>
			<div class="row">
			<?php 
			$course = $this->Front_model->course($langs->id); 
			foreach($course->result() as $courses){
				$length = strlen($courses->course_desc);
			?>
				<div <?php if($length >= 100) { ?>style="width: 550px; height:auto;" <?php } ?> class="col-md-4">
					<div class="featured-box">
						<div class="text">
							<h3><?php echo $courses->course_name; ?></h3>
							<?php echo $courses->course_desc; ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</section>
	</div>
	</div>
	<!-- container -->