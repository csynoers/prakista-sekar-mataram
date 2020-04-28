<!--================Header Menu Area =================-->
  <div class="row">
    <div class="col-sm-6">
      <a class="float-left" href="{base_url}">
        <img src="{base_url}assets/images/website/thumb/{logo}">
      </a>
    </div>
    <div class="col-sm-6">
      <nav class="navbar navbar-expand float-right mt-sm-5">
        <ul class="navbar-nav">
          {social_media}
            <li class="nav-item"><a href="{options_contents}{options_link}{/options_contents}" target="_blank"><img class="w-50" src="<?= base_url('assets/images/image_link/thumb/{options_contents}{options_image}{/options_contents}') ?>" alt="{options_title}" title="{options_title}"></a></li>
          {/social_media}
        </ul>
      </nav>
    </div>
  </div>
  
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
            <a class="nav-link ml-3 mr-3 font-weight-bold {a_class}" href="{href}" data-toggle="{a_data_toggle}">{title}</a>
            <!-- Dropdown -->
            <div class="dropdown-menu">
              {rows}
                <a class="dropdown-item font-weight-bold" href="{href}">{title}</a>
              {/rows}
            </div>
          </li>
        {/navs}
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
      <!-- <span class="navbar-text">
        Navbar text with an inline element
      </span> -->
    </div>
  </nav>

<!--================Header Menu Area =================-->