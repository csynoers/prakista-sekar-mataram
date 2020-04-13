<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item active text-capitalize">pendaftaran</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
<!--   <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo base_url()?>post/add">
          <button type="button" class="btn btn-primary text-capitalize"><i class="fa fa-plus-square-o" aria-hidden="true"></i> add new post</button>
        </a>
      </div>
    </div>
  </div>
  <hr> -->

  <!-- Daftar Kategori Produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-table"></i> list of pendaftaran</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Title</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {pendaftaran}
              <tr>
                <td class="text-capitalize">{form_title}</td>
                <td class="text-capitalize">{form_timestamp}</td>
                <td>
                  <a href="<?php echo base_url() ?>form/view-pendaftaran/{form_id}"><button class="btn btn-info"><i class="fa fa-eye"></i> View Detail</button></a>
                  <a href="<?php echo base_url() ?>form/delete-pendaftaran/{form_id}"><button class="btn btn-danger delete">Delete</button></a>
                </td>
              </tr>
            {/pendaftaran}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>