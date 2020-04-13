{situs-terkait}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item">Link</li>
    <li class="breadcrumb-item">Edit</li>
    <li class="breadcrumb-item active">{links_no_src_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah kategori-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Link</div>
    <div class="card-body">
      <form method="POST" action="<?php echo base_url() ?>situs-terkait/update">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Judul</label>
              <input type="hidden" name="id" value="{links_no_src_id}">
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Title" name="title" required="" value="{links_no_src_title}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Ex: https://www.google.co.id" name="description" required="" value="{links_no_src_description}">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-danger cancel">Cancel</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>
</div>
{/situs-terkait}