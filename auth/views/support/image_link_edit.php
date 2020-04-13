{support}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item text-capitalize">{parent_title}</li>
    <li class="breadcrumb-item text-capitalize">edit</li>
    <li class="breadcrumb-item active text-capitalize">{options_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit {parent_title}</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>support/image-link-update">
        <div class="form-group">
          <div class="form-row">
            <input type="hidden" name="id" value="{options_id}">
            <input type="hidden" name="height_thumb" value="{height_thumb}">
            <div class="col-md-6">
              <label for="exampleInputName">Title</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Title" name="title" required="" value="{options_title}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your link" name="link" required="" value="{options_link}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <label class="d-block">Thumbnail</label>
              <img src="{img_src}" alt="">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <label for="exampleInputName">Change Thumbnail</label>
              <input class="form-control" type="file" name="fupload">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
              &nbsp &nbsp
              <button type="button" class="btn btn-danger cancel">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>

</div>
{/support}