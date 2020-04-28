<div id="contentWrapper" class="container-fluidXXX">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
			<li class="breadcrumb-item"><a href="javascript: void(0)">Galeri</a></li>
            <li class="breadcrumb-item active" aria-current="page">Video</li>
        </ol>
    </nav>
	<div class="rowX">
		{options}
			<div class="card col-sm-3">
				<iframe class="card-img-top mt-3" src="{options_contents}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<div class="border border-info card-body mb-3">
					<h5 class="card-title text-capitalize">{options_title}</h5>
					<p class="card-text"><i class="material-icons" style="font-size:14px">&#xe916;</i> {options_timestamp}</p>
				</div>
			</div>
		{/options}
	</div>
</div>