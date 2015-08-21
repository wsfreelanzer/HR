<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'form-control',
	'placeholder' => 'Password'
);
?>

<div class="page-content-block">
    <!-- no-header -->
    <!-- no-sidebar -->

    <div class="login-content">

	<?php echo form_open($this->uri->uri_string(),' class="form-signin form-login" '); ?>

		<?php echo form_password($password); ?>
		<?php echo form_error($password['name'],'<span class="text-danger">','</span>'); ?>
		<span class="text-danger">
			<?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
		</span>

	<?php echo form_submit('change', 'Delete account','class="btn btn-lg btn-default btn-block btn-login"'); ?>
	<?php echo form_close(); ?>
    </div>
</div>