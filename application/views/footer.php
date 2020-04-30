    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">
            © <?= date('Y') ?> Prakasita. All rights reserved.<br>
            {statistik}
              Online : {pengunjung_online}
              Pengunjung hari ini : {pengunjung_hari_ini}
              Hits hari ini : {hits_hari_ini}
              Total Hits : {total_hits}
              Total Pengunjung : {total_pengunjung}
            {/statistik}
          </p>
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
        if ( screen.availWidth > 767 ) { /* desktop view */
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

        } else { /* mobile view */
          j('#navPrimary').addClass('sticky-top');
          j.each(j('.carousel-item'),function(){
            let img_src = j(this).data('bg-src');
            j(this).attr({"style":`
              height: calc( calc(${screen.availHeight}px/100)*50) !important;
              background-image: url('${img_src}');
              background-size: cover;
              background-position: center;
            `});
          })

        }

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