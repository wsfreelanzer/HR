<?php

if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}

$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'placeholder' => $login_label,
	'class' => 'form-control'
);

?>

<div class="page-content-block">
    <!-- no-header -->
    <!-- no-sidebar -->

    <div class="login-content">
        
        <?php echo form_open($this->uri->uri_string(),' class="form-signin form-login" '); ?>
            <?php echo form_input($login); ?>
            <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>

            <?php echo form_submit('reset', 'Get a new password','class="btn btn-lg btn-default btn-block btn-login"'); ?>

		<?php echo form_close(); ?>


    </div>
</div>
