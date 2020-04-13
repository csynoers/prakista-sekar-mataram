<div class="row mt-3">
    <div class="col-md-12 mb-3">
    <h3>Hasil Pencarian <small>{result_search}</small></h3>
    <hr>
    {contents}
      <div class="card">
        <div class="row">
          <div class="col-md-9">
            <div class="card-body">
              <h5 class="card-title text-capitalize">{post_title}</h5>
              <p class="card-text text-justify">{post_contents}</p>
              <a href="{base_href}" class="btn btn-primary">Read More</a>
            </div>                        
          </div>
          <div class="col-md-3">
            <div class="w-100 h-100 b-cover" style="background-image: url('{post_src}')"></div>
          </div>
        </div>
      </div>
    {/contents}
    </div> 
</div>