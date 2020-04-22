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
  <!-- <script src="{base_url}/library/template/js/bootstrap.min.js"></script> -->
  <!-- <script src="{base_url}/library/template/js/jquery.easing.min.js"></script> -->
  <!-- <script src="{base_url}/library/template/js/scrolling-nav.js"></script> -->
  <script type="text/javascript">
      (function(j){
        /* set full screen no scrolling */
        j('body').attr( {
          "width" : screen.availWidth,
          "height" : screen.availHeight,
          "style" : "overflow-y: hidden;"
        } );
        
        j('#contentWrapper').attr( {
          "style" : `height: calc( calc(${screen.availHeight}px/100)*65) !important;overflow: auto;`
        } );

        j.each(j('.carousel-item'),function(){
          let img_src = j(this).data('bg-src');
          j(this).attr({"style":`
            height: calc( calc(${screen.availHeight}px/100)*62) !important;
            background-image: url('${img_src}');
            background-size: cover;
            background-position: center;
          `});
        })

        /* carousel setting */
        var li,items;
        li = j('.carousel-indicators').find('li');
        items= j('.carousel-item');
        j(li[0]).addClass('active');
        j(items[0]).addClass('active');
        // items.on('click',function(){
        //   if ( j(this).attr('data-link'!='') )
        //   {
        //     location.assign(j(this).attr('data-link'));
        //   }
        // });

        j('body').append("</bo"+"dy>");
      })(jQuery)
  </script>



</body>
</html>