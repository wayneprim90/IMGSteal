<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
			<a href="<?php echo base_url(); ?>" class="navbar-brand">
				IMGsteal
			</a>
		</div>
		<form class="navbar-form navbar-left" method="post" action="<?php echo base_url('main/get_image'); ?>" role="search">
			<div class="form-group">
				<input autocomplete="off" type="text" style="min-width: 300px;" class="form-control" name="url" placeholder="http://" value="http://www.">
			</div>
			<button type="submit" class="btn btn-success">Steal Images</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			
		</ul>
	</div>
</nav>
<div class="container"> 
	<h5 class="lead">All Images</h5>
	<?php require_once("./assets/simple_html_dom.php"); ?>
	<?php if (file_get_html($url) !== false): ?>
		<?php $html = file_get_html($url); ?>
		<?php if (count($html -> find("img") != 0)): ?>
			<?php foreach ($html -> find("img") as $element) { ?>
				<?php if (!getimagesize($element -> src)): ?>
					<?php $img_path = $url."/".$element->src; ?>
					<?php array_push($imageArray, $img_path); ?>
					<?php if (getimagesize($img_path)): ?>
						<div class="col-md-3">
							<div class="well">
								<a href="<?php echo $img_path; ?>" target="_blank">
									<img src="<?php echo $img_path; ?>" style="max-width: 100%;" alt="">
								</a>
							</div>
						</div>
					<?php endif ?>
				<?php else: ?>
					<?php array_push($imageArray, $element->src); ?>
					<div class="col-md-3">
						<div class="well">
							<a href="<?php echo $element -> src; ?>"? target="_blank">
								<img src="<?php echo $element -> src; ?>" style="max-width: 100%;" alt="">
							</a>
						</div>
					</div>
				<?php endif ?> 
			<?php } ?>
		<?php else: ?>
			<p class="text-center">Can't retrieve images from this site.</p>
		<?php endif ?>
	<?php else: ?>
			<p class="text-center">Can't retrieve images from this site.</p>
	<?php endif ?>
</div>

