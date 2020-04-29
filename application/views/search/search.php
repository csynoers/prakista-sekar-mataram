<div id="contentWrapper" class="container-fluid row">
    <h3 class="mt-3 mb-3">Hasil Pencarian <small>{result_search}</small></h3>
    <!-- {message} -->
    <hr>
    {contents}
      <div class="card">
        <div class="row">
          <div class="col-sm-9">
            <div class="card-body">
              <h5 class="card-title text-capitalize">{post_title} <small><i class="material-icons">date_range</i><i>{post_timestamp}</i></small></h5>
              <p class="card-text text-justify">{post_contents}</p>
              <a href="{base_href}" class="btn btn-outline-danger">Selengkapya</a>
            </div>                        
          </div>
          <div class="col-sm-3">
            <div class="w-100 h-100 b-cover" style="background-image: url('{post_src}')"></div>
          </div>
        </div>
      </div>
    {/contents}
</div>