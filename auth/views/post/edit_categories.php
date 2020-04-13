{content}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb text-capitalize">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>post">post</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>post/categories">all categories</a></li>
    <li class="breadcrumb-item">{options_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-plus-square-o"></i> edit categories {options_title}</div>
    <div class="card-body">
      <form method="POST" action="<?php echo base_url()?>post/update-categories">
        <input type="hidden" name="id" value="{options_id}">
        <div class="form-group row">
          <label class="col-sm-1">Title</label>
          <div class="col-sm-5">
            <input value="{options_title}" required="" type="text" name="title" class="form-control" placeholder="Enter Your Title in Here">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Descriptions <small class="text-info">(optional)</small></label>
          <div class="col-sm-10">
            <textarea name="contents" rows="4" class="form-control">{options_contents}</textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary text-capitalize"> Update</button>
        &nbsp &nbsp
        <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
      </form>
    </div>
    <div class="card-footer small text-muted">last Update : {options_timestamp} Ago</div>
  </div>
</div>
{/content}