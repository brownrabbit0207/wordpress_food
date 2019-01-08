<form action="<?php echo wp_registration_url(); ?>" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
        <div class="u-form-group u-form-name">
          <label for="username-a30d" class="u-label" name=""><?php _e( 'Username' ); ?></label>
          <input type="text" placeholder="<?php _e( 'Username' ); ?>" id="username-a30d" name="user_login" class="u-input u-input-rectangle u-none u-input-1" required="">
        </div>
        <div class="u-form-group u-form-password">
          <label for="email-a30d" class="u-label" name=""><?php _e( 'Email' ); ?></label>
          <input type="text" placeholder="<?php _e( 'Email' ); ?>" id="email-a30d" name="user_email" class="u-input u-input-rectangle u-none u-input-2" required="">
        </div>
        
if (file_exists($pathToLinkTemplates . 'register.php')) {
	include_once $pathToLinkTemplates . 'lostpassword.php';
}