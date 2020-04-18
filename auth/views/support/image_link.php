<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item active text-capitalize">{categories}{options_title}{/categories}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add {categories}{options_title}{/categories}</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>support/image-link-insert">
        <div class="form-group">
          <div class="form-row">
            <input type="hidden" name="options_parent" value="{categories}{options_id}{/categories}">
            <input type="hidden" name="height_thumb" value="{categories}{options_contents}{/categories}">
            <div class="col-md-6">
              <label for="exampleInputName">Title</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Title" name="title" required="">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your link" name="link" required="">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <label for="exampleInputName">Thumbnail</label>
              <input class="form-control" type="file" name="fupload" required="">
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

  <!-- Daftar Kategori Produk-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table text-capitalize"></i> List Of {categories}{options_title}{/categories}</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Thumbnail</th>
              <th>Title</th>
              <th>Link</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Thumbnail</th>
              <th>Title</th>
              <th>Link</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {support}
            <tr>
              <td><img src="{options_image}"></td>
              <td>{options_title}</td>
              <td>{options_link}</td>
              <td>
                <a href="<?php echo base_url() ?>support/image-link-edit/{options_id}"><button class="btn btn-info">Edit</button></a>
                <a href="<?php echo base_url() ?>support/image-link-delete/{options_id}"><button class="btn btn-danger delete">Delete</button></a>
              </td>
            </tr>
            {/support}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>