<div class="boxContent topPage">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hotTitle">
          <h1>Galeri yo-<span class="text-muted">bersih</span></h1>
        </div>
      </div>
		<div class="col-sm-12">
			<div class="row">
				{foto}
					<div class="col-lg-4">
						<a href="<?php echo base_url() ?>galeri/detail-foto/{options_id}/{options_seo}">
							<h6><i class="material-icons" style="font-size:14px">&#xe916;</i> {options_timestamp}</h6>						
							<img class="img-fluid" src="<?php echo base_url()?>assets/images/photo/thumb/256/{options_image}">
							<h5 class="text-center text-capitalize">{options_title}</h5>
						</a>
					</div>
				{/foto}
			</div>
		</div>
    </div>
  </div>
</div>