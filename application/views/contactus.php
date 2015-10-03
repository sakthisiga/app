<div class="span9">
	 <div class="hero-unit">
    <?php 
    $formattribs = array('class'=>'form-horizontal');
    echo  form_open('email/send',$formattribs); ?>
    <fieldset>
  <legend>Contact Us..</legend>
		<div class="control-group">
			<label class="control-label" for="name">Your name:</label>
		<div class="controls">
			<input id="name" class="input" name="name" type="text" value="" size="30" />
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="email">Your email:</label>
			<div class="controls">
			<input id="email" class="input" name="email" type="text" value="" size="30" />
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="message">Your message:</label>
			<div class="controls">
			<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea>
		</div>
		</div>
		<div class="control-group">
		<div class="controls">
		<input class="btn btn-primary" type="submit" value="Send email" />
		</div>
		</div>
	<?php echo form_close(); ?>
	<?php echo validation_errors(); ?>
	</fieldset>
	
	</div>
	</div>