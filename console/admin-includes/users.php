<?php

if(isset($action) && $action == 'delete'){

	$user->delete($id);

}

if(isset($action) && $action == 'delete-all'){

	$user->deletePermantly($id);

}

$query = $user->getAll();

if(isset($_GET['search'])){

	$query = $user->search($_GET['search']);

}

?>


<h1>CUSTOMERS</h1>



	<div class="row">

	<form action="" method="get">

		<div class="col-md-6">

			<input type="hidden" name="page" value="users"> <input required placeholder="surname, email, postcode, phone..." type="text" name="search" class="form-control" value="<?php if(isset($_GET['search'])){ print $_GET['search']; } ?>">  	

		</div>
	
		<div class="col-md-3">

			<button type="submit" class="btn btn-primary">SEARCH</button>  

		</div>
		
		<div class="col-md-3">

<a class="btn btn-primary" href="account.php?page=users&action=export-customers">Export <i class="fa fa-chevron-right"></i></a>

		</div>
	
	</form>
	
	</div>
	
	<br /><br />
	
<?php if(count($query)){ ?>

	<div class="table-responsive">

		<table class="table table-striped table-hover">

		<tr><td><strong>Date Added</strong></td><td><strong>Customer</strong></td><td><strong>Email</strong></td><td width="20%"><strong>Action</strong></td></tr>
		
		<?php
		
		foreach( $query as $row ){
		
		print '<tr><td>'.date('d/m/Y', strtotime($row->created_at)).'</td><td>'.$row->first_name.' '.$row->last_name.'</td><td>'.$row->email.'</td><td><a class="btn btn-primary" href="account.php?page=user&action=edit&id='.$row->id.'">View <i class="fa fa-chevron-right"></i></a> <a onclick="return confirm(\'Are you sure you want to delete this customer?\')" class="btn btn-primary" href="account.php?page=users&action=delete&id='.$row->id.'">Delete <i class="fa fa-remove"></i></a> <a onclick="return confirm(\'Are you sure you want to delete all this customer data?\')" class="btn btn-danger" href="account.php?page=users&action=delete-all&id='.$row->id.'">Delete Data <i class="fa fa-remove"></i></a></td></tr>';
		
		}
		
		?>

		</table>

	</div>		

<?php } else { print '<p>There are no results for that search.</p>'; } ?>
