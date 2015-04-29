<header>
	<div style="margin: 0 auto;; max-width: 950px; " class="alert alert-info text-center">We are currently working on some images not showing up. It will be fixed soon.</div>

	<div style="margin: 50px auto 50px auto; height: 24px; width: 202px;">
		<a href="<?php echo base_url(); ?>">
			<img src="<?php echo base_url()."assets/images/logo.png"; ?>" style="max-width: 100%;" alt="">
		</a>
	</div>
	<p class="text-center" style="margin-bottom: 30px; color: #999;">Type in a web address prefixed with 'http://www' and steal!</p>

</header>
<div class="container">
	<?php echo form_open("main/get_image"); ?>
	<fieldset class="col-md-6 col-md-offset-3">
		<div class="form-group">
			<div class="input-group">
		      <input autocomplete="off" type="text" class="form-control" name="url" placeholder="http://" value="http://www.">
		      <span class="input-group-btn">
		        <button class="btn btn-success" type="submit">Steal The Images!</button>
		      </span>
		    </div><!-- /input-group -->
		</div>
	</fieldset>
	
	</form>
	<div class="col-md-4 col-md-offset-4">
		<div style="margin-top: 15px;" class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
	</div>
</div>