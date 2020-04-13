<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Post</li>
    <li class="breadcrumb-item active">Add New Post</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Add New Post</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>post/insert">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Title</label>
              <input class="form-control text-capitalize" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Title" name="title" required="">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-12">Select Categories Content</label>
          <div class="col-md-6">
            <select name="categories" class="form-control text-capitalize" required="">
              <option value="" selected="" disabled=""> --Choose Category Contents-- </option>
              {categories}
                <option value="{options_id}" {options_disable}>{options_title}</option>
              {/categories}            
            </select>            
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="keterangan">Descriptions</label>
              <textarea id="mytextarea" class="form-control" name="contents"></textarea>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label>Thumbnail</label>
              <div class="col-md-4 alert alert-primary fade in alert-dismissable show">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
                </button>    
                <strong>Info !</strong> Type: *.jpg, *.png Max-Size: 1 MB
              </div>
              <input class="form-control col-md-3" type="file" name="fupload" required="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Save</button>
              &nbsp &nbsp
              <button type="button" class="btn btn-danger cancel">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-footer small text-muted">Now <?php echo date('d-m-Y') ?></div>
  </div>
</div>