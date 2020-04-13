{tentang-kami}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Tentang Kami</li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">{contents_no_src_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Informasi Tentang Kami</div>
    <div class="card-body">
        <form method="POST" action="<?php echo base_url() ?>tentang-kami/update/{contents_no_src_id}">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="exampleInputName">Judul</label>
                <input type="hidden" name="id" value="{contents_no_src_id}">
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Title" name="title" value="{contents_no_src_title}">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label for="keterangan">Keterangan</label>
                <textarea id="mytextarea" class="form-control" name="description">{contents_no_src_description}</textarea>
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
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>
{/tentang-kami}