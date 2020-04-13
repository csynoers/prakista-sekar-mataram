{support}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb text-capitalize">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item">{options_title}</li>
    <li class="breadcrumb-item active">Edit</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- pages header-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit pages</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>support/contents-no-image-update">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Title</label>
              <input type="hidden" name="id" value="{options_id}">
              <input class="form-control text-capitalize" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Title In Here" name="title" required="" value="{options_title}">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="keterangan">Descriptions</label>
              <textarea id="mytextarea" class="form-control" name="contents">{options_contents}</textarea>
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
    <div class="card-footer small text-muted text-capitalize">last updated : {options_timestamp} ago</div>
  </div>
</div>
{/support}