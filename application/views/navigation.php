<!--================Header Menu Area =================-->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brandXXX page-scrollXXX" href="{base_url}">
          <img src="{base_url}assets/images/website/thumb/{logo}">
        </a>
      </div>
      <ul class="nav navbar-nav pull-right" style="display: inline-flex">
        <li><a href="{base_url}" target="_blank"><i class="fa fa-phone-square" style="font-size:36px"></i></a></li>
        <li><a href="{base_url}" target="_blank"><i class="fa fa-instagram" style="font-size:36px"></i></a></li>
        <li><a href="{base_url}" target="_blank"><i class="fa fa-facebook-official" style="font-size:36px"></i></a></li>
        <li><a href="{base_url}" target="_blank"><i class="fa fa-twitter" style="font-size:36px"></i></a></li>
      </ul>
    </div>
  </nav>

  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <!-- <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Menu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
          </div> -->

          <ul class="cs-nav nav navbar-nav">
            <li class="<?= empty($this->uri->segment(1))? 'active' : NULL ; ?>"><a href="{base_url}">Beranda</a></li>
            <li><a href="<?= base_url('profil/') ?>">Tentang Kami</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Kategori Satu</a></li>
                <li><a href="#">Kategori Dua</a></li>
              </ul>
            </li>
            <li><a href="{base_url}">Artikel</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Galeri
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Foto</a></li>
                <li><a href="#">Video</a></li>
              </ul>
            </li>
            <li><a href="{link}">Hubungi Kami</a></li>
            <!-- {navigation}
              <li><a href="{link}">{title}</a></li>
            {/navigation} -->
          </ul>
      </div>
  </nav>

<!--================Header Menu Area =================-->