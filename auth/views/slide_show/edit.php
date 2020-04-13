{slide_show}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">{options_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Slide Show</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>slide_show/update">
        <div class="form-group">
          <input type="hidden" name="id" value="{options_id}">
          <!-- <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Title</label>
              <input type="hidden" name="id" value="{options_id}">
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter your title" name="title" required="" value="{options_title}">
            </div>
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="http://example.com" name="link" value="{options_link}">
            </div>
          </div> -->
          <div class="form-row">
            <div class="col-md-12">
              <label for="exampleInputName">Captions</label>
              <textarea id="mytextarea" class="form-control" rows="3" name="caption">{options_caption}</textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12">
              <label for="exampleInputName">Thumbnail</label><br>
              <img class="img-thumbnail" src="<?php echo base_url() ?>../assets/images/slide_show/{options_image}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <label for="exampleInputName">Change</label>
              <input class="form-control" type="file" name="fupload">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?php echo base_url() ?>slide_show">
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
{/slide_show}