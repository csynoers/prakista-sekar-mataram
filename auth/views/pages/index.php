<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{base_url}admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item text-capitalize active">all pages</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--add new pages-->
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <a href="{base_url}pages/add">
          <button type="button" class="btn btn-primary text-capitalize"><i class="fa fa-plus-square-o" aria-hidden="true"></i> add new pages</button>
        </a>
      </div>
    </div>
  </div>
  <hr>

  <!-- list pages-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-table"></i> list pages</div>
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
            {pages}
              <tr>
                <td class="text-capitalize">{pages_title}</td>
                <td>{pages_timestamp}</td>
                <td>
                  <a href="<?php echo base_url() ?>pages/edit/{pages_id}"><button class="btn btn-info">Edit</button></a>
                  <!--<a href="<?php echo base_url() ?>pages/delete/{pages_id}" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-danger">Delete</button></a>-->
                </td>
              </tr>
            {/pages}
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted text-capitalize">last updated : {last_update} ago</div>
  </div>

</div>