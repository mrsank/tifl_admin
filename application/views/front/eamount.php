<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Exam Amount</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<section class="container">

		<div class="row">

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
			
				<?php foreach($etype->result() as $data){ ?>
				<h3><?php echo $data->exam_type; ?> </h3><br/>
				<table border="1">
				<tr>
					<th style="text-align: center;">Exam</th>
					<th style="text-align: center;">Amount</th>
				</tr>
				<?php 
					$edetails = $this->Front_model->edata($data->id);
					foreach($edetails->result() as $eamt){
						?>
						<tr>
						<td width="150px" align="center"><?php echo $eamt->exam_name; ?></td>
						<td width="150px" align="center"><?php echo $eamt->amt_external; ?></td>
						</tr>
					<?php
					}
				?>
				</table>
				<?php } ?>
			</article>
			<!-- /Article -->
			<!-- Sidebar -->
			<aside style="padding-top: 8px;" class="col-md-4 sidebar sidebar-right">
				<div class="row panel">
					<div class="col-xs-12">
						<h3>Goethe Institut Exam Dates</h3>
						<p>
							<img src="<?php echo $base;?>assets/images/1.jpg" alt="">
						</p>
						<p>Do you need certification or a diploma for work, study or a visa? Would you like to know the level of your knowledge of German?
There are numerous internationally recognized proficiency exams available through Goethe Institut worldwide. You can find the details and dates for exams from below link:</p>
						<p><a href="<?php echo $base;?>index.php/front/edate" class="btn-inline">Exam dates</a></p>
					</div>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</section>
	<!-- /container -->