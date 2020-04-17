{video}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Video</li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">{options_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Video</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>gallery/update_video">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Judul</label>
              <input type="hidden" name="id" value="{options_id}">
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter name" name="title" required="" value="{options_title}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter link" name="link" required="" value="{options_contents}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12">
              <iframe class="mt-3 w-100" height="320" src="{options_contents}"></iframe>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?php echo base_url() ?>link">
                <button type="button" class="btn btn-danger">Cancel</button>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>
</div>
{/video}
