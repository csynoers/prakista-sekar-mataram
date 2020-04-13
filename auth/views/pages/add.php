<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item text-capitalize">pages</li>
    <li class="breadcrumb-item active text-capitalize">add pages</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> add new pages</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>pages/insert">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName" class="text-capitalize">title page</label>
              <input class="form-control text-capitalize" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Title In Here" name="title" required="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="keterangan">Keterangan</label>
              <textarea id="mytextarea" class="form-control" name="contents"></textarea>
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
              <button type="submit" class="btn btn-primary">Save</button>
              &nbsp &nbsp
              <button type="button" class="btn btn-danger" onclick="return window.history.back()">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>