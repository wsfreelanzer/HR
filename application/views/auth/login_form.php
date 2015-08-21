<?php

if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}

$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'form-control',
	'placeholder' => $login_label
);

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'form-control',
	'placeholder' => 'Password'
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
	'class' => 'form-control captcha-input',
	'placeholder' => 'Confirmation Code'
);
?>
<div class="page-content-block">
    <!-- no-header -->
    <!-- no-sidebar -->

    <div class="login-content">
        
        <?php echo form_open($this->uri->uri_string(),' class="form-signin form-login" '); ?>
            <?php echo form_input($login); ?>
            <?php echo form_error($login['name'],'<span class="text-danger">','</span>'); ?>
            <span class="text-danger"><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
            

            <?php echo form_password($password); ?>
            <?php echo form_error($password['name'],'<span class="text-danger">','</span><br>'); ?>
            <span class="text-danger"><?php echo isset($errors[$password['name']])?$errors[$password['name']].'':''; ?></span>

            <div class="remember-text">
            	<?php echo form_checkbox($remember); ?><?php echo form_label('Remember me', $remember['id']); ?>
            </div>
            
            	<?php 
            	if ($show_captcha) {
            		if ($use_recaptcha) { ?>
            			<div id="recaptcha_image"></div>
						<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
						<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
						<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>

						<div class="recaptcha_only_if_image">Enter the words above</div>
						<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>

						<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
						<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
						<?php echo $recaptcha_html; ?>
					<?php } else { ?>
					<div class="captcha-block">
						<p>Enter the code exactly as it appears:</p>
						<?php echo $captcha_html; ?>
						<?php echo form_input($captcha); ?>
						<?php echo form_error($captcha['name']); ?>
					</div>
					<?php }
				} ?>

            <?php echo form_submit('submit', 'Let me in','class="btn btn-lg btn-default btn-block btn-login"'); ?>

            <div class="login-links">
                
                <p class="text-center small">
                	<?php
                	if ($this->config->item('allow_registration', 'tank_auth') && $user_count <= 0 )
                		echo anchor('/auth/register/', 'Not a user yet? Sign up', 'grey'); 
                	?>
                </p>

                <p class="text-center small">
                	<?php echo anchor('/auth/forgot_password/', 'Forgot password ?', 'grey'); ?>
                </p>
            </div>
        
		<?php echo form_close(); ?>


    </div>
</div>
 