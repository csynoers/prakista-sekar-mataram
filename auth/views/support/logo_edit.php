<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">Logo and Icon Website</li>
  </ol>
  <!-- end Breadcrumbs-->

  <div class="row">
    {support}
    <div class="col-md-6">
      <div class="card mb-3">
        <div class="card-header text-capitalize">
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit {options_title}
        </div>
        <div class="card-body">
          <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>support/logo-update/?n={options_id}">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="exampleInputName">Thumbnail</label><br>
                  <img class="img-thumbnail" src="<?php echo base_url() ?>../assets/images/website/thumb/{options_image}">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4">
                  <label for="exampleInputName">Change</label>
                  <input class="form-control" type="file" name="fupload" required="">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>
    {/support}
  </div>
  <!--tambah produk-->
</div>