<link href="<?= base_url() ?>library/light-gallery-master/dist/css/lightgallery.css" rel="stylesheet">

<div id="contentWrapper" class="container-fluidXXX">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
			<li class="breadcrumb-item"><a href="javascript: void(0)">Galeri</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
        </ol>
    </nav>
	<div id="lightgallery" class="card-columns">
		{options}
			<div class="card" data-responsive="<?= base_url("assets/images/photo/256/{image_src}") ?> 375, <?= base_url("assets/images/photo/{image_src}") ?> 480, <?= base_url("assets/images/photo/{image_src}") ?> 800" data-src="<?= base_url("assets/images/photo/{image_src}") ?>" data-sub-html="<h4>{options_title}</h4><p>{options_timestamp}</p>">
				<img class="card-img-top" src="<?= base_url("assets/images/photo/256/{image_src}") ?>" alt="Card image">
				<div class="card-body">
					<h5 class="card-title text-capitalize">{options_title}</h5>
					<p class="card-text"><i class="material-icons" style="font-size:14px">&#xe916;</i> {options_timestamp}</p>
				</div>
			</div>
		{/options}
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#lightgallery').lightGallery();
	});
</script>
<!-- <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script> -->
<script src="<?= base_url() ?>library/light-gallery-master/dist/js/lightgallery-all.min.js"></script>
<script src="<?= base_url() ?>library/light-gallery-master/lib/jquery.mousewheel.min.js"></script>