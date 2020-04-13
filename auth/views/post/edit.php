{post}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Post</li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">{post_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Post</div>
    <div class="card-body">
      <!-- {message} -->
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>post/update">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">title</label>
              <input type="hidden" name="id" value="{post_id}">
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Title" name="title" required="" value="{post_title}">
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-12">Select Categories Content</label>
          <div class="col-md-6">
            <select class="form-control text-capitalize" required="" name="categories">
              <option value="" disabled=""> --Choose Category Contents-- </option>
              {post_categories}
                <option value="{options_id}" {options_selected} {options_disable}>{options_title}</option>
              {/post_categories}            
            </select>            
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="keterangan">Descriptions</label>
              <textarea id="mytextarea" class="form-control" name="contents">{post_contents}</textarea>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label>Thumbnail</label>
              <div class="col-md-4">
                <img class="img-responsive" src="<?php echo base_url() ?>../assets/images/post/thumb/256/{post_src}" title="{post_title}">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label>Change Thumbnail</label>
              <div class="col-md-4 alert alert-primary fade in alert-dismissable show">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="font-size:20px">×</span>
                </button>    
                <strong>Info !</strong> Type: *.jpg, *.png Max-Size: 1 MB
              </div>
              <input class="form-control col-md-3" type="file" name="fupload">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
              &nbsp &nbsp
              <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-footer small text-muted">Last Updated {post_timestamp}</div>
  </div>
</div>
{/post}