<?php
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' => 'form-control',
	'placeholder' => 'New Password'
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
	'class' => 'form-control',
	'placeholder' => 'Confirm Password'
);
?>
<?php echo form_open($this->uri->uri_string()); ?>

<div class="page-content-block">
    <!-- no-header -->
    <!-- no-sidebar -->

    <div class="login-content">

	<?php echo form_open($this->uri->uri_string(),' class="form-signin form-login" '); ?>

		<?php echo form_password($new_password); ?>
		<?php echo form_error($new_password['name'],'<span class="text-danger">','</span>'); ?>
		<span class="text-danger">
			<?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
		</span>

		<?php echo form_password($confirm_new_password); ?>
		<?php echo form_error($confirm_new_password['name'] ,'<span class="text-danger">','</span>'); ?>
		<span class="text-danger">
			<?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
		</span>

	<?php echo form_submit('change', 'Change Password','class="btn btn-lg btn-default btn-block btn-login"'); ?>
	<?php echo form_close(); ?>
    </div>
</div>