<div class="boxContent topPage">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hotTitle">
          <h1>Detail <span class="text-muted">{album}{options_title}{/album}</span></h1>
        </div>
      </div>
			
			<div class="col-sm-12">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
		        {photo}
		        <li data-target="#demo" data-slide-to="{options_id}"></li>
		        {/photo}
		      </ol>

		      <!-- Wrapper for slides -->
		      <div class="carousel-inner" role="listbox">
		        {photo}
		        <div class="item" data-link="{}">
		          <img style="width: 100%" title="{options_title}" src="<?php echo base_url() ?>assets/images/photo/{options_contents}" alt="" width="" height="">
		        </div>
		        {/photo}
		    
		      </div>

		      <!-- Left and right controls -->
		      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		      </a>
		      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		      </a>
		    </div>
			</div>

    </div>
  </div>
</div>