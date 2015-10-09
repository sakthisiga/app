<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="screen" />
<div id="login_form">

	<h1>Product Details</h1>
    <?php 
	echo form_open('register/enter');
	echo form_input('product', 'Product','id="product"');
	echo form_input('price', 'Price','id="price"');
	echo form_input('quantity', 'Quantity','id="quantity"');
	echo form_submit('submit', 'Enter the Details','id="submit"');
	echo form_close();
	?>
<?php echo validation_errors(); ?>

</div><!-- end login_form-->
<script type="text/javascript">
$('#submit').click(function() {
	
	var product = $('#product').val();
	var price = $('#price').val();
	var quantity = $('#quantity').val();
	
	if (!product || product == 'Product') {
		alert('Please enter the product name');
		return false;
	}

	if (!price || price == 'Price') {
		alert('Please enter price');
		return false;
	}

	if (!quantity || quantity == 'Quantity') {
		alert('Please enter the quantity');
		return false;
	}
	
	var form_data = {
		product: $('#product').val(),
		price: $('#price').val(),
		quantity: $('#quantity').val(),
		ajax: true		
	};
	
	$.ajax({
		url: "<?php echo site_url('register/enter'); ?>",
		type: 'POST',
		data: form_data,
		success: function(msg) {
			alert('Success');
		}
	});
	
	return false;
});
	
	
</script>