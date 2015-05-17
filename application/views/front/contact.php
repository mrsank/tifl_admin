<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Contact us</h1>
				</div>
			</div>
		</div>
	</header>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Your Message</h3>
						
						<form class="form-light mt-20" role="form">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" class="btn btn-two">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-6">
						<div class="row">
						<?php foreach($ctype->result() as $cdata){ ?>
							<div class="col-md-6">
								<h3 class="section-title"><?php echo $cdata->center_type;?></h3>
								<?php $cdetails = $this->Front_model->cdetails($cdata->id); 
								foreach($cdetails->result() as $data){
								?>
								<p><?php echo $data->address; ?></p>
								<?php } ?>
							</div>
							<?php } ?>
						</div>
						<h3 class="section-title">Get connected</h3>
						<p>
						D.V.ARUN KUMAR<br>
						<strong>CEO & FOUNDER</strong><br>
						Email: arun@translinguaindia.com, translinguaindia@yahoo.co.in<br>
						Mobile No. : 94471 54579, 93881 54579<br>
						Phone : 0471 3227211 
						</p>						
					</div>
				</div>
			</div>