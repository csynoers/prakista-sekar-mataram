<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Support</li>
    <li class="breadcrumb-item active">Link</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah kategori-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah Link Baru</div>
    <div class="card-body">
      <form method="POST" action="<?php echo base_url() ?>situs-terkait/insert">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Judul</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Title" name="title" required="">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Ex: https://www.google.co.id" name="description" required="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>

  <!-- Daftar situs terkait-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Daftar situs terkait</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Links</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Judul</th>
              <th>Links</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {situs-terkait}
              <tr>
                <td>{links_no_src_title}</td>
                <td>{links_no_src_description}</td>
                <td>
                  <a href="<?php echo base_url() ?>situs-terkait/edit/{links_no_src_id}"><button class="btn btn-info">Edit</button></a>
                  <a href="<?php echo base_url() ?>situs-terkait/delete/{links_no_src_id}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger">Delete</button></a>
                </td>
              </tr>
            {/situs-terkait}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>