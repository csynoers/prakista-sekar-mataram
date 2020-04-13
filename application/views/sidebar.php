<div class="row d-none d-md-block">
  <div class="col-md-12 mt-3">
    <div class="card" id="card" ">
      <div class="card-header">
        Cari Artikel Kami
      </div>
      <div class="card-body">
         <form class="form-inline" method="get" action="{base_url}search">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="material-icons">search</i></span>
            </div>
            <input name="c" type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon1">
          </div>
        </form>
      </div>
    </div>
    
    <div class="card" id="card" >
      <div class="card-header">
        <h5 class="form-inline"><i class="material-icons">info_outline</i> Informasi</h5>
      </div>

      <div class="card-body">
        <blockquote class="blockquote mb-0">
         {sidebar_left_informasi}
        </blockquote>
      </div>
    </div>
    
    <div class="card" id="card">
      <div class="card-header">
        <h5 class="form-inline"><i class="material-icons">card_giftcard</i> Partner</h5>
      </div>
      <div class="card-body text-center">
        {sidebar_left_partner}
        <a href="{options_link}">
          <img src="{img_src}" alt="" title="{options_title}">
        </a>
        {/sidebar_left_partner}
      </div>
    </div>
    
    <div class="card" id="card">
      <div class="card-header">
        <h5 class="form-inline"><i class="material-icons">public</i> Social Media</h5>
      </div>
      <div class="card-body text-center">
        {sidebar_left_sosmed}
        <a href="{options_link}">
          <img src="{img_src}" alt="" title="{options_title}">
        </a>
        {/sidebar_left_sosmed}
      </div>
    </div>
    
    <div class="card" id="card">
      <div class="card-header">
        <h5 class="form-inline"><i class="material-icons">equalizer</i> Statistik</h5>
      </div>
      <div class="card-body text-left text-capitalize">
        {sidebar_left_statistik}
        <div class="row">
          <div class="col-8">pengunjung hari ini</div>
          <div class="col-4">: {pengunjung_hari_ini}</div>
        </div>
        <div class="row">
          <div class="col-8">total pengunjung</div>
          <div class="col-4">: {total_pengunjung}</div>
        </div>
        <div class="row">
          <div class="col-8">hits hari ini</div>
          <div class="col-4">: {hits_hari_ini}</div>
        </div>
        <div class="row">
          <div class="col-8">total hits</div>
          <div class="col-4">: {total_hits}</div>
        </div>
        <div class="row">
          <div class="col-8">pengunjung online</div>
          <div class="col-4">: {pengunjung_online}</div>
        </div>
        {/sidebar_left_statistik}
      </div>
    </div>
  </div>
</div>