<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item active">Gallery Photo</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo base_url()?>gallery/add-photo">
          <button type="button" class="btn btn-primary"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add New Album</button>
        </a>
      </div>
    </div>
  </div>
  <hr>

  <!-- Daftar Kategori Produk-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> List Album</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Judul</th>
                <th>Photos</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Judul</th>
                <th>Photos</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {photo}
            <tr>
                <td class="text-capitalize">{options_title}</td>
                <td>{options_count} items</td>
                <td>{options_timestamp}</td>
              <td>
                <a href="<?php echo base_url() ?>gallery/edit-photo/{options_id}"><button class="btn btn-info">Edit</button></a>
                <a href="<?php echo base_url() ?>gallery/delete-photo-album/{options_id}" ><button class="btn btn-danger delete">Delete</button></a>
              </td>
            </tr>
            {/photo}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>
