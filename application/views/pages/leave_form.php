		<div class="container mt-5">
			<div class="mx-auto">
				<h1>Leave Form</h1>
				<hr>
						<div class="row">
							<div class="col">
								<div class="col form-control"><?php echo $this->session->userdata('name');  ?></div>
							</div>
							<div class="col">

								<div class="col form-control"><?php echo $this->session->userdata('department');  ?></div>
                
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-6">
								<div class="col form-control"><?php echo $this->session->userdata('position');  ?></div>
							</div>
						</div>
							<br>
				<form action="" method="post">
					<div class="form-row justify-content-md-center">
						<div class="col-3">
								<input class="form-control" type="text" placeholder="Start Date" onfocus="(this.type='date')" name="start_date" required>
						</div>
							<div class="col-3">
								<input class="form-control" type="text" placeholder="End Date" onfocus="(this.type='date')" name="end_date" required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<div class ="row">
									<select class="form-control" name="leave_type">
										<option>Available Paid Leave Absences</option>
										<option>Sick Leave: 12 days</option>
										<option>Vacation Leave: 12 days</option>
										<option>Emergency Leave: 3 days</option>
									</select>								
								</div>
								<br>
								<div class="row">
									<textarea class="form-control" name="reasons"rows="3">Reasons:</textarea>
								</div>
							</div>
							<div class="col">
									<textarea class="form-control" name="workload" rows="6">Workload assigned on the following dates of absence:</textarea>							
							</div>
						</div>
						 <br>
							<center><button class="btn btn-primary btn-lg submit-button" type="submit">Submit</button></center>
				</form>
			</div>
		</div>
