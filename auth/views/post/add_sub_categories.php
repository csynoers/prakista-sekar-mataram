<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb text-capitalize">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>post">post</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>post/categories">categories</a></li>
    <li class="breadcrumb-item">Add Sub Categories</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-plus-square-o"></i> Add New Sub Categories</div>
    <div class="card-body">
      <form method="POST" action="<?php echo base_url()?>post/insert-sub-categories" enctype="multipart/form-data">
        <input type="hidden" name="options_parent" value="{options_parent}">
        <div class="form-group row">
          <label class="col-sm-1">Title</label>
          <div class="col-sm-5">
            <input required="" type="text" name="title" class="form-control" placeholder="Enter Your Title in Here">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-12">Descriptions</label>
          <div class="col-sm-12">
            <textarea id="mytextarea" name="contents" rows="4" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="col-md-4">
            <label for="exampleInputName">Change</label>
            <input class="form-control" type="file" name="fupload" required="">
          </div>
        </div>
        <button type="submit" class="btn btn-primary text-capitalize"> Publish</button>
        &nbsp &nbsp
        <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
      </form>
    </div>
    <!-- <div class="card-footer small text-muted">{last_update}</div> -->
  </div>
</div>