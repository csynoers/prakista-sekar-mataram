      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-5 topFoot">
          <p>© <?= date('Y') ?> Prakista. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Template Custom JavaScript File -->
  <script src="{base_url}/library/template/js/bootstrap.min.js"></script>
  <script src="{base_url}/library/template/js/jquery.easing.min.js"></script>
  <script src="{base_url}/library/template/js/scrolling-nav.js"></script>
  <script type="text/javascript">
      (function(j){
        /* set full screen no scrolling */
        // j('body').attr( {
        //   "width" : screen.availWidth,
        //   "height" : screen.availHeight,
        //   "style" : "overflow-y: hidden;"
        // } );

        var li,items;
        li = j('.carousel-indicators').find('li');
        items= j('.item');
        j(li[0]).addClass('active');
        j(items[0]).addClass('active');
        items.on('click',function(){
          if ( j(this).attr('data-link'!='') )
          {
            location.assign(j(this).attr('data-link'));
          }
        });
        j('body').append("</bo"+"dy>");
      })(jQuery)
  </script>



</body>
</html>