<style>
table {
	 width: 600px;
	 margin-bottom: 10px;
	}

	td {
	 border-right: 1px solid #aaaaaa;
	 padding: .2em;
	}

	td:last-child {
	 border-right: none;
	}

	th {
	 text-align: left;
	 padding-left: 1em;
	 background: #cac9c9;
	border-bottom: 1px solid white;
	border-right: 1px solid #aaaaaa;
	}

	#pagination a, #pagination strong {
	 background: #e3e3e3;
	 padding: 4px 7px;
	 text-decoration: none;
	border: 1px solid #cac9c9;
	color: #292929;
	font-size: 13px;
	}

	#pagination strong, #pagination a:hover {
	 font-weight: normal;
	 background: #cac9c9;
	}	


.row{margin:5px;}
</style>
<div class="span9">
	 <div class="hero-unit">
    <?php 
    $formattribs = array('class'=>'form-horizontal');
    echo  form_open('register/create',$formattribs); ?>
    <fieldset>
  <legend>User Registration Form</legend>
		<div class="control-group">
		<label class="control-label" for="name">Name:</label>
		<div class="controls">
			<?php 
			$att=array('placeholder'=>'Your Name', 'class' => 'input-xlarge');
			echo form_input('name', set_value('name'),$att); ?>
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="state">State:</label>
		<div class="controls">
			<?php echo form_input('state', set_value('state')); ?>
		</div>
		</div>
		<div class="control-group">
		<label class="control-label" for="city">City:</label>
		<div class="controls">
			<?php echo form_input('city', set_value('city')); ?>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="phone">Phone:</label>
			<div class="controls">
			<?php echo form_input('phone', set_value('phone')); ?><br />
		</div>
		</div>
		<div class="control-group">
		<div class="controls">
		<input class="btn btn-primary" id="submit_button" type="submit" value="Register" />
		<input class="btn" id="submit_button" type="reset" value="Reset" />
		</div>
		</div>
		 </fieldset>
	<?php //echo form_close(); ?>
	<?php echo validation_errors('<ul><li><font color="Red" size="3">','</font></li></ul>'); ?>
	
	


	<hr />
		<h4>Registered Details</h4>
		<table border="1" class="table table-bordered">
		<tr>
			<th> ID </th>
			<th> Name </th>
			<th> State </th>
			<th> City </th>
			<th> Phone </th>
			<th> Action </th>
		</tr>
		<?php $count=1; ?>
	<?php foreach($records as $row) : ?>
		<tr>
			<td> <?php echo "SD-00000".$row->id; ?> </td>
			<td> <?php echo $row->name; ?> </td>
			<td> <?php echo $row->state; ?> </td>
			<td> <?php echo $row->city; ?> </td>
			<td> <?php echo $row->phone; ?> </td>
			<td> <?php echo anchor("register/delete/$row->id","Delete")?> </td>
		</tr>
	<?php endforeach;?>
	</table>
	<?php echo $this->pagination->create_links(); ?>
	</div>
	
</div>
</div>