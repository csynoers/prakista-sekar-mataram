<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item active">Slide Show</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add New Slide Show</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url() ?>slide_show/insert">
        <div class="form-group">
          <!-- <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Title</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Your Title" name="title" required="">
            </div>
            <div class="col-md-6">
              <label for="exampleInputName">Link</label>
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="http://example.com" name="link">
            </div>
          </div> -->
          <div class="form-row">
            <div class="col-md-12">
              <label for="exampleInputName">Caption</label>
              <textarea id="mytextarea" class="form-control" rows="3" name="caption"></textarea>
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
      <i class="fa fa-table"></i> List Of slide Show</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Thumbnail</th>
              <!-- <th>Title</th>
              <th>Link</th> -->
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Thumbnail</th>
              <!-- <th>Title</th>
              <th>Link</th> -->
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {slide_show}
            <tr>
              <td ><img class="img-thumbnail" src="<?php echo base_url() ?>../assets/images/slide_show/{options_image}"></td>
              <!-- <td>{options_title}</td>
              <td>{options_link}</td> -->
              <td>
                <a href="<?php echo base_url() ?>slide-show/edit/{options_id}"><button class="btn btn-info">Edit</button></a>
                <a href="<?php echo base_url() ?>slide-show/delete/{options_id}"><button class="btn btn-danger delete">Delete</button></a>
              </td>
            </tr>
            {/slide_show}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>