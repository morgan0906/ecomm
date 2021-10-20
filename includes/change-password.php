<?php

if( isset($_POST['old_password']) ){

	$user->changePassword();

}

?>

		<?php if( !$user->isAdmin() ){ ?>

<h1 class="mt-40">CHANGE PASSWORD</h1>

<hr />
		    
		<?php } ?>

	<form class="form-horizontal form-light" method="post" action="">

						<div class="panel panel-default">
						<div class="panel-heading">CHANGE PASSWORD</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">Old Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="old_password">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">New Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Repeat Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="repeat_password">
									</div>
								</div>
								

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> CHANGE PASSWORD </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>



		
	