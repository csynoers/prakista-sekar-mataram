{content}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item">Kotak Masuk</li>
    <li class="breadcrumb-item active">{form_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-eye" aria-hidden="true"></i> View Detail </div>
    <div class="card-body">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Name</label>
          <span class="form-control">{form_title}</span>
        </div>
        <div class="form-group col-md-6">
          <label>Email</label>
          <span class="form-control">{email}</span>
        </div>

        <div class="p-1">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Message !</h4>
            <hr>
            <p class="mb-0">{contents}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer small text-muted">Date : {form_timestamp}</div>
  </div>
</div>
{/content}