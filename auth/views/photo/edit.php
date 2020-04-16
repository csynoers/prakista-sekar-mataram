<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Galeri</li>
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>gallery/photo">Photo</a></li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">{edit_photo_album}{options_title}{/edit_photo_album}</li>
  </ol>
  <!-- end Breadcrumbs-->

    <!--tambah produk-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add New Photo</div>
      <div class="card-body">
          <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>gallery/update-photo">
              <input type="hidden" name="id" value="{edit_photo_album}{options_id}{/edit_photo_album}">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="exampleInputName">Title</label>
                    <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter name" name="title" required="" value="{edit_photo_album}{options_title}{/edit_photo_album}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <div class="form-row">
                      <div class="col-md-6">
                          <label>Choose Upload Files Image</label>
                          <div class="mt-2 alert alert-primary fade in alert-dismissable show">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true" style="font-size:20px">×</span>
                            </button>    
                            <strong>Info !</strong> Type: *.jpg. Max-Size: 1024x768 Pixels
                          </div>
                          <input type="file" class="form-control" name="fupload[]" multiple/>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <div class="form-row">
                      <div class="col-md-6">
                          <input class="btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
                          &nbsp;&nbsp;
                          <a class="btn btn-danger" href="<?php echo base_url(); ?>gallery/photo">Cancel</a>
                      </div>
                  </div>
              </div>
          </form>
          <div class="row justify-content-end">
            <div class="col-3">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input checkall" value="1">Check All
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input uncheckall" value="1">Uncheck All
                </label>
              </div>
            </div>
            <div class="col-1">
              <div class="form-check form-check-inline disabled">
                <button class="btn btn-primary delete-checked">Delete</button>
              </div>
            </div>
          </div>
      </div>
      <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
    </div>

    <div class="row" id="content">
        {photo_rows}
        <div class="col-md-3">
          <img class="img-responsive img-thumbnail gallery-foto" src="          <?php echo base_url(); ?>../assets/images/photo/256/{options_contents}" alt="" >
          <p><input type="checkbox" class="checkthumb" name="checkthumb" value="{options_id}" > {options_contents} </p>
        </div>
        {/photo_rows}
    </div>
</div>
