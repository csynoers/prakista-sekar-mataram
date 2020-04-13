<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item active text-capitalize">all post</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <a href="<?php echo base_url()?>post/add">
          <button type="button" class="btn btn-primary text-capitalize"><i class="fa fa-plus-square-o" aria-hidden="true"></i> add new post</button>
        </a>
      </div>
    </div>
  </div>
  <hr>

  <!-- Daftar Kategori Produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-table"></i> list of post</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Category</th>
              <th>Last Updated</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Category</th>
              <th>Last Updated</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {post}
              <tr>
                <td>{post_number}</td>
                <td class="text-capitalize">{post_title}</td>
                <td class="text-capitalize">{options_title}</td>
                <td>{post_timestamp}</td>
                <td>
                  <a href="<?php echo base_url() ?>post/edit/{post_id}"><button class="btn btn-info">Edit</button></a>
                  <a href="<?php echo base_url() ?>post/delete/{post_id}"><button class="btn btn-danger delete">Delete</button></a>
                </td>
              </tr>
            {/post}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted text-capitalize">last updated : {last_update} ago</div>
  </div>

</div>