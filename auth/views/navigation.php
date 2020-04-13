  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand text-capitalize" href="{base_url}admin">Pt. Prakista</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        {navigation}
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a> -->
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            {content}
            <a class="dropdown-item" href="<?php echo base_url()?>message/detail/{message_id}">
              <strong>{message_from}</strong>
              <span class="small float-right text-muted">{message_timestamp}</span>
              <div class="dropdown-message small">Hey there! {message_fill} !</div>
            </a>
            <div class="dropdown-divider"></div>
            {/content}
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item small" href="<?php echo base_url('message/all')?>">View all messages</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{base_url}../" target="_blank" >
            <i class="fa fa-fw fa-eye"></i>View Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

<div class="content-wrapper">