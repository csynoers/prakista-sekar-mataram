<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Website</li>
    <li class="breadcrumb-item active">Description</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Description Website</div>
    <div class="card-body">
      {description}
        <form method="POST" action="<?php echo base_url()?>website/update/{options_id}">
          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <textarea id="textarea" class="form-control" name="options_contents" rows="10">{options_contents}</textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
                &nbsp &nbsp
                <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      {/description}
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>