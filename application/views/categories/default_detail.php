<div class="boxContent topPage">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hotTitle">
          <h1>Detail Artikel yo-<span class="text-muted">bersih</span></h1>
        </div>
      </div>
      {contents}
      <div class="col-sm-12">
        <div class="form boxOne">
          <h2 class="ml-3 mt-3 text-capitalize">{post_title}</h2>
          <h6 class="ml-3 text-info"><small>Published : {post_timestamp}</small></h6>
          <hr>
          <img style="width: 96%; margin-bottom: 15px" src="{post_src}" alt="">
          <div class="car-body" >
            <div style="padding: 15px ;" class="card-text text-justify m-3">
              <p>{post_contents}</p>
            </div>
          </div>
          
        </div>
      </div>
      {/contents}   
    </div>
  </div>
</div>