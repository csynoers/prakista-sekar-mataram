<div class="container-fluid" id="gallery">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Gallery</li>
    <li class="breadcrumb-item active">Photo</li>
  </ol>
  <!-- end Breadcrumbs-->


    <!--tambah produk-->
    <!-- <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah Album Baru</div>
      <div class="card-body">
        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>Album/insert">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Judul</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter name" name="title" required="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> -->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add New Photo Album</div>
    <div class="card-body">
        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>gallery/insert-photo" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">Title Photo Album</label>
                  <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter name" name="title" required="">
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
                        <input type="file" class="form-control" name="fupload" required="" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <input class="btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- <div class="row justify-content-end">
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
              <button class="btn btn-primary delete-checked">Hapus</button>
            </div>
          </div>
        </div> -->
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>

</div>
