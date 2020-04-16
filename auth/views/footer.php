    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © YoBersih.com 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{base_url}Login/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{base_url}assets/sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="{base_url}assets/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{base_url}assets/sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <!-- <script src="{base_url}assets/sb-admin/vendor/chart.js/Chart.min.js"></script> -->
    <script src="{base_url}assets/sb-admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="{base_url}assets/sb-admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{base_url}assets/sb-admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="{base_url}assets/sb-admin/js/sb-admin-datatables.min.js"></script>
    <!-- <script src="{base_url}assets/sb-admin/js/sb-admin-charts.min.js"></script> -->

    <!-- tinymce -->
    <script src="<?php echo base_url()  ?>assets/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
        height: '500px',
        width: '99%',
        selector: "#mytextarea",
        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality jbimages",
            "emoticons template paste textcolor colorpicker textpattern imagetools"
        ],

        toolbar1: "template | fontselect | undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | media jbimages | link forecolor backcolor emoticons | pagebreak print preview",
      image_advtab: true,
      relative_urls: false,
      templates: [
        {title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
        {title: 'Paket Yo Bersih', description: 'tambah paket baru yo bersih', url: '{base_url}../template/?t=paket-yobersih'},
        {title: 'single Column', description: 'Some desc 2', url: '{base_url}../template/?t=single-column'},
        {title: 'single Column 2', description: 'Some desc 2', url: '{base_url}../template/?t=home-page'},
      ],
      valid_elements : '+*[*]',
      content_css: [
        '{base_url}../library/template/css/bootstrap.css',
        '{base_url}../library/template/css/style.css',
        '{base_url}../library/template/fonts/font-awesome/css/font-awesome.min.css',
      ],
      extended_valid_elements: 'table[class=table table-striped]',
      setup: function (editor) {
          editor.on('BeforeSetContent', function(e) {
            if (e.content.indexOf("<table") == 0) {
                      e.content = '<div class="table-responsive">' + e.content + '</div>';
            }
          });
      }

    });
    console.log(tinyMCE);
    </script>

    <script type="text/javascript">
      (function(j){

        // cancel
        j('.cancel').on("click",function(){
          history.go(-1);
        });
        // cancel

        // delete
        j('.delete').on("click",function(){
          var action= confirm('Are you sure you want to delete this item?');
          if (action==0) {
            return false;
          }
        });
        // delete

        j(".category").on("change",function(){
          var category = j(this).val();
          j.ajax({
              type: "POST",
              url: "<?php echo base_url()?>produk/subcategory",
              data: {id:category},
              success: function(data) {
                j('.subcategory').html(data);
                // j('.notification-cart').show("slow").delay(5000).hide("slow");
                // j("#btn-cart").show();
                // j("#btn-loading-cart").hide();
                j('.subcategory').attr('disabled', false);
              },
          });

        });

        if(j(".category").val()==0){
          j('.subcategory').attr('disabled', true);
        }

        // gallery foto
        j('.checkall').on("click", function(){
          j('.checkthumb').prop('checked', true);
          j('.uncheckall').prop('checked', false);
        });
        j('.uncheckall').on("click", function(){
          j('.checkall').prop('checked', false);
          j('.checkthumb').prop('checked', false);
        });

        j('.delete-checked').on("click", function(){
          var check=[];
          j('.checkthumb:checked').each(function(){
            var data_id= j(this).val();
            check.push(data_id);
          });

          j.ajax({
             type: "POST",
             url: "{base_url}gallery/delete-photo",
             data: {"id":check},
             success: function(data){
                location.reload();
                alert(check.length+' Foto Berhasil Dihapus.');
             }
          });

        });
        // gallery foto
      })(jQuery)
    </script>
    <script type="text/javascript">

        $(document).on('change', '#status_hukum', function(){
            var id = $(this).val();
            if (id == 0 || id == 5) {
                $('#acuan_hukum').val(0);
                $('#acuan_hukum').attr("disabled", "disabled");
            }else{
                $('#acuan_hukum').val(0);
                $('#acuan_hukum').removeAttr("disabled");
            }
        });

    </script>
    
  </div>
</body>

</html>