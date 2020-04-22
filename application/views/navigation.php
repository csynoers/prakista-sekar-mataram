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
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link ml-3 mr-3 font-weight-bold" href="{base_url}">Home <span class="sr-only">(current)</span></a>
        </li>
        {navs}
          <li class="nav-item {li_class}">
            <a class="nav-link ml-3 mr-3 font-weight-bold {a_class}" href="<?= base_url('{href}') ?>" data-toggle="{a_data_toggle}">{title}</a>
            <!-- Dropdown -->
            <div class="dropdown-menu">
              {rows}
                <a class="dropdown-item font-weight-bold" href="<?= base_url('{href}') ?>">{title}</a>
              {/rows}
            </div>
          </li>
        {/navs}
      </ul>
      <!-- <span class="navbar-text">
        Navbar text with an inline element
      </span> -->
    </div>
  </nav>

<!--================Header Menu Area =================-->