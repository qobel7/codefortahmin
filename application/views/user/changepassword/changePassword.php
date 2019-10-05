<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Şifre değiştir</h1>
			</div>
			<form enctype="multipart/form-data" id="updateUserPasswordForm">
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
				<p class="help-block">At least 6 characters</p>
			</div>
			<div class="form-group">
				<label for="password_confirm">Confirm password</label>
				<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
				<p class="help-block">Must match your password</p>
			</div>
				<input type="hidden" name="id" value="<?php echo $userId ;?>" >
			<div class="form-group">
				<input type="submit" onclick="BIP.updateContent('User','updatePassword','updateUserPasswordForm',this);return false;" value="Güncelle">
			</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->
