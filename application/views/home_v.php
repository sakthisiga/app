<div class="span9">
	 <div class="hero-unit">
            <h1>Welcome to Mon Journal!</h1>
            <p>
            		<h4>Users List</h4>
		<table border="1" class="table table-bordered">
		<tr>
			<th> ID </th>
			<th> First Name </th>
			<th> Last Name </th>
			<th> SSN </th>
		</tr>
	<?php foreach($users as $row) : ?>
		<tr>
			<td> <?php echo $row->id; ?> </td>
			<td> <?php echo $row->fname; ?> </td>
			<td> <?php echo $row->lname; ?> </td>
			<td> <?php echo $row->ssn; ?> </td>
		</tr>
	<?php endforeach;?>
	</table>
            </p>
            <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>

				
	</div>
	</div>