<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb text-capitalize">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>post">post</a></li>
    <li class="breadcrumb-item active">all catgories</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah produk-->
  <!-- <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-plus-square-o"></i> add new categories</div>
    <div class="card-body">
      <form method="POST" action="<?php echo base_url()?>post/insert-categories">
        <div class="form-group row">
          <label class="col-sm-1">Title</label>
          <div class="col-sm-5">
            <input required="" type="text" name="title" class="form-control" placeholder="Enter Your Title in Here">
          </div>
          <label class="col-sm-2">Parent Categories <small class="text-info">(optional)</small></label>
          <div class="col-sm-4">
            <select name="categories" class="form-control text-capitalize">
              <option value="null"> --Pilih Categories -- </option>
              {categories}
              <option value="{options_id}">{options_title}</option>
              {/categories}
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Descriptions <small class="text-info">(optional)</small></label>
          <div class="col-sm-10">
            <textarea name="contents" rows="4" class="form-control"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary text-capitalize"> Publish</button>
      </form>
    </div>
  </div> -->
  <hr>

  <!-- Daftar Kategori Produk-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-table"></i> list of categories</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Title</th>
              <th>Last Update</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Title</th>
              <th>Last Update</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>
            {categories}
              <tr>
                <td class="text-capitalize">{options_title}</td>
                <td>{options_timestamp}</td>
                <td>
                  <a href="<?php echo base_url() ?>post/edit-categories/{options_id}"><button class="btn btn-info">Edit</button></a>
                  <!-- <a class="{options_delete}" href="<?php echo base_url() ?>post/delete-categories/{options_id}"><button class="btn btn-danger delete">Delete</button></a> -->
                </td>
              </tr>
            {/categories}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted text-capitalize">last updated : {last_update} ago</div>
  </div>

</div>