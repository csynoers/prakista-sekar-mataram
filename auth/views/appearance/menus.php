	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="//resources/demos/style.css"> -->
  <style>
  /* #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; } */
  </style>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
  </script>
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{base_url}admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item text-capitalize">Appearance</li>
    <li class="breadcrumb-item text-capitalize active">Menus</li>
  </ol>
  <!-- end Breadcrumbs-->

  <!--add new pages-->
  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
        <!-- <a href="{base_url}pages/add">
          <button type="button" class="btn btn-primary text-capitalize"><i class="fa fa-plus-square-o" aria-hidden="true"></i> add new pages</button>
        </a> -->
      </div>
    </div>
  </div>
  <hr>

  <!-- list pages-->
  <div class="card mb-3 w-50">
    <div class="card-header text-capitalize">
      <i class="fa fa-table"></i> list Menus</div>
    <div class="card-body">
			<ul id="sortable" class="navbar-nav">
        {navs}
					<li class="ui-state-default nav-item mt-1 mb-1 p-3 data-nav" data-nav='{json}'>
						<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>{title}<br>
						<!-- {rows}
							<span class="ml-4">--{title}</span><br>
						{/rows} -->
					</li>
				{/navs}
			</ul>
			<button type="button" class="btn btn-primary btn-block mt-3 btn-save">Save</button>
    </div>
    <!-- <div class="card-footer small text-muted text-capitalize">last updated : {last_update} ago</div> -->
  </div>

</div>
<script>
	$( document ).on('click','.btn-save',function(){
    let navs = [];
		$.each($('.data-nav'),function(){
			navs.push( $(this).data('nav') )
		})
    
    /* convert object to string before send useing ajax */
    navs = JSON.stringify(navs);
    
    $.get('{base_url}/appearance/store',{"data":navs},function(d){
      if ( d=='TRUE' ) { /* true */
        alert('Pengaturan menu berhasil disimpan');
      } else { /* false */
        alert('Pengaturan menu gagal disimpan');
      }

      /* reload this page */
      location.reload();

    });
	})
</script>