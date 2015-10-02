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
	
label{color:#6c6c6c;}

input{line-height:31px;}

input,textarea{width:288px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background-color:rgba(255,255,255,.6);border:solid 1px #b6c7cb;}

#contact_form{height:317px;background-color:#e1e9eb;border:solid 1px #e5e5e5;padding:10px 20px 50px 20px;  -webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}

#submit_button{width:109px;height:34px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;background-color:#86c5fa;-webkit-box-shadow:inset 0 2px rgba(255,255,255,.29);-moz-box-shadow:inset 0 2px rgba(255,255,255,.29);box-shadow:inset 0 2px rgba(255,255,255,.29);border:solid 1px #77a4cb;font-weight:bold;color:#fff;margin-left:7px;}

label.required:after{content:'*';color:red;}

.row{margin:5px;}
</style>
<div class="span9">
	 <div class="hero-unit">
<div id="register_form">
    <?php echo  form_open('register/create'); ?>
		<div class="row">
		<label for="name">Name:</label><br />
			<?php echo form_input('name', set_value('name')); ?>
		</div>
		<div class="row">
		<label for="state">State:</label><br />
			<?php echo form_input('state', set_value('state')); ?>
		</div>
		<div class="row">
		<label for="city">City:</label><br />
			<?php echo form_input('city', set_value('city')); ?>
		</div>
		<div class="row">
			<label for="phone">Phone:</label><br />
			<?php echo form_input('phone', set_value('phone')); ?><br />
		</div>
		
		<input id="submit_button" type="submit" value="Register" />
	<?php //echo form_close(); ?>
	<?php echo validation_errors(); ?>
	</div>
	<hr />
		<u>Registered Details</u>
		<table border="1">
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	

<script type="text/javascript" charset="utf-8">
	$('tr:odd').css('background', '#e3e3e3');
</script>
</div>
</div>