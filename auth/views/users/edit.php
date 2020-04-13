<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Setting</li>
    <li class="breadcrumb-item">User</li>
    <li class="breadcrumb-item active">Edit</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--tambah kategori-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit User</div>
    <div class="card-body">
      {users}
      <form method="POST" action="<?php echo base_url() ?>user/update">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Username</label>
              <input type="hidden" name="id" value="{users_id}">
              <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Title" name="users_name" required="" value="{users_name}">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Password</label>
              <input type="password" class="form-control" name="users_password" required="" placeholder="*****" value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="<?php echo base_url() ?>admin">
                <button type="button" class="btn btn-danger">Cancel</button>
              </a>
            </div>
          </div>
        </div>
      </form>
      {/users}
    </div>
    <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  </div>
</div>