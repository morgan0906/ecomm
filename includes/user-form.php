<?php
if( count(get_included_files()) == 1 ){
	header('Location: /');
	exit();
}
?>

<div class="row">

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label>Title</label>
			<select name="title" class="form-control">
			
				<option value="Mr" <?php if(isset($cust_row) && $cust_row->title == 'Mr' ){ print 'selected'; } ?>>Mr</option>
				<option value="Mrs" <?php if(isset($cust_row) && $cust_row->title == 'Mrs' ){ print 'selected'; } ?>>Mrs</option>
				<option value="Ms" <?php if(isset($cust_row) && $cust_row->title == 'Ms' ){ print 'selected'; } ?>>Ms</option>
				<option value="Miss" <?php if(isset($cust_row) && $cust_row->title == 'Miss' ){ print 'selected'; } ?>>Miss</option>
				<option value="Dr" <?php if(isset($cust_row) && $cust_row->title == 'Dr' ){ print 'selected'; } ?>>Dr</option>
			
			</select>
		</div>
	</div>
	
</div>

<div class="row">

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<label>First Name</label>
			<input type="text" name="first_name" id="first_name" class="form-control" value="<?php if(isset($cust_row)){ print $cust_row->first_name; } ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Last Name</label>
			<input type="text" name="last_name" id="last_name" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->last_name; } ?>">
		</div>
	</div>
	
	<?php if(isset($_GET['type']) && $_GET['type'] != 3 ){ ?>

		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Company Name</label>
				<input type="text" name="company" id="company" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->company; } ?>">
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Website</label>
				<input type="text" name="website" id="website" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->website; } ?>">
			</div>
		</div>
	
	<?php } ?>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Email Address / Username</label>
			<input type="text" name="email" id="email" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->email; } ?>">
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Password</label>
			<input type="text" name="password" id="password" class="form-control" placeholder="(Optional if adding or updating a password)">
		</div>
	</div>
	
	<?php if(( isset($_GET['type']) && $_GET['type'] == 1 ) || ( isset($_GET['type']) && $_GET['type'] == 2) ){ ?>
	
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Phone No.</label>
				<input type="text" name="phone" id="phone" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->phone; } ?>">
			</div>
		</div>
		
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Mobile No.</label>
				<input type="text" name="mobile" id="mobile" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->mobile; } ?>">
			</div>
		</div>							

		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Address 1</label>
				<input type="text" name="address_1" id="address_1" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->address_1; } ?>">
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Address 2</label>
				<input type="text" name="address_2" id="address_2" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->address_2; } ?>">
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Town</label>
				<input type="text" name="town" id="town" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->town; } ?>">
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Postcode</label>
				<input type="text" name="postcode" id="postcode" class="form-control"  value="<?php if(isset($cust_row)){ print $cust_row->postcode; } ?>">
			</div>
		</div>
	
	<?php } ?>
	
	<?php if( ( isset($_GET['type']) && $_GET['type'] == 2 ) || !isset($_GET['type']) ){ ?>
	
	<div class="col-md-12">  <h1>PROPERTY DETAILS</h1> <br /><br /> </div>
	
	
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Address 1</label>
			<input type="text" name="property_address_1" id="property_address_1" class="form-control"  value="<?php if(isset($property_row)){ print $property_row->property_address_1; } ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Address 2</label>
			<input type="text" name="property_address_2" id="property_address_2" class="form-control"  value="<?php if(isset($property_row)){ print $property_row->property_address_2; } ?>">
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Town</label>
			<input type="text" name="property_town" id="property_town" class="form-control"  value="<?php if(isset($property_row)){ print $property_row->property_town; } ?>">
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Postcode</label>
			<input type="text" name="property_postcode" id="property_postcode" class="form-control"  value="<?php if(isset($property_row)){ print $property_row->property_postcode; } ?>">
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Property Value &pound;</label>
			<input type="text" name="value" id="value" class="form-control"  value="<?php if(isset($property_row)){ print $property_row->value; } ?>">
		</div>
	</div>
	
	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
		<label>Date Paid</label>
			<input type="text" name="date_paid" id="date_paid" class="form-control datepicker"  value="<?php if(isset($property_row) && $property_row->date_paid ){ print date('d/m/Y', strtotime($property_row->date_paid)); } ?>">
		</div>
	</div>	
	
	<?php } ?>
	
	
</div>

