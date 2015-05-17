<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Exam Dates</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<section class="container">

		<div class="row">

			<!-- Article main content -->
			<article class="col-md-8 maincontent">
			
				<?php foreach($ecenter->result() as $data){ ?>
				<h3><?php echo $data->ecenter_name; ?> </h3><br/>
				<table border="1">
				<tr>
					<th style="text-align: center;">Month</th>
					<th style="text-align: center;">Reg. Date</th>
					<th style="text-align: center;">Exam Date</th>
				</tr>
				<?php 
					$edetails = $this->Front_model->edate($data->id);
					foreach($edetails->result() as $edates){
						?>
						
						<tr>
						<td width="100px" align="center"><?php echo $edates->month;?></td>
						<td width="200px" align="center"><?php echo $edates->reg_date; ?></td>
						<td width="150px" align="center"><?php echo $edates->exam_date; ?></td>
						</tr>
					<?php
					}
				?>
				</table>
				<?php } ?>
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row panel">
					<div class="col-xs-12">
					<?php foreach($ecenter->result() as $data){ ?>
						<h3><?php echo $data->ecenter_name; ?> </h3>
						<p><?php echo str_replace(",","<br/>", $data->ecenter_address);?></p>
					<?php } ?>
					</div>
				</div>
			</aside>
			<!-- /Sidebar -->

		</div>
	</section>
	<!-- /container -->