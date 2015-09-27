<h1> Home Page</h1>
	<div id="body">
		<p> The page contains the information about the company or organization to help the customer understands the nature of business.</p>
		<u>Users List</u>
		<table border="1">
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
	</div>