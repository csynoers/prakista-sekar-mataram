{pages}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb text-capitalize">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">pages</li>
    <li class="breadcrumb-item">edit</li>
    <li class="breadcrumb-item active">{pages_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- pages header-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit pages</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>pages/update">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Judul</label>
              <input class="form-control text-capitalize" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Title In Here" name="title" required="" value="{pages_title}" required="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="keterangan">Keterangan</label>
              <textarea id="mytextarea" class="form-control" name="contents">{pages_contents}</textarea>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="keterangan">Form Embed <small class="text-info text-capitalize">(*optional, form will incuded in this page)</small></label>
              <select name="embed" class="form-control">
                <option selected="" disabled=""> --Choose Form Embed Here-- </option>
                <option value="contact-form"> Contact Form </option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="id" value="{pages_id}">
              <button type="submit" class="btn btn-primary">Update</button>
              &nbsp &nbsp
              <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-footer small text-muted text-capitalize">last updated : {last_update} ago</div>
  </div>
</div>
{/pages}