<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tentang Kami</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah tentang kami-->
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo base_url() ?>tentang-kami/add">
          <button type="button" class="btn btn-primary"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah Tentang Kami</button>
        </a>
      </div>
    </div>
  </div>
  <hr>

  <!-- Daftar Tentang Kami-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Daftar Tentang Kami</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <!-- <th>Code Product</th> -->
              <th>Title</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <!-- <th>Code Product</th> -->
              <th>Title</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {tentang-kami}
            <tr>
              <!-- <td>{tentang-kami}</td> -->
              <td>{contents_no_src_title}</td>
              <td>
                <a href="<?php echo base_url() ?>tentang-kami/edit/{contents_no_src_id}">
                  <button type="button" class="btn btn-info">Edit</button>
                </a>
                <a href="<?php echo base_url() ?>tentang-kami/delete/{contents_no_src_id}">
                  <button type="button" class="btn btn-danger delete">Delete</button>
                </a>
              </td>
            </tr>
            {/tentang-kami}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>