{contents}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb text-capitalize">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Support</li>
    <li class="breadcrumb-item">edit</li>
    <li class="breadcrumb-item active">{options_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!-- pages header-->
  <div class="card mb-3">
    <div class="card-header text-capitalize">
      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> edit pages</div>
    <div class="card-body">
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>support/video-footer-update/?act=update">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <label for="exampleInputName">Judul</label>
              <span class="form-control text-capitalize">{options_title}</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" name="contents">{options_contents}</textarea>
              <div class="alert alert-info mt-3">
                <h2>How To Embed Video From Youtube ?</h2>
                1. On a computer, go to the YouTube video you want to embed. <br>
                2. Under the video, click Share . <br>
                3. Click Embed. <br>
                4. From the box that appears, copy the HTML code specific in src attributes . <br>
                5. Paste the code in This Page . <br>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-footer small text-muted">{options_timestamp}</div>
  </div>
</div>
{/contents}