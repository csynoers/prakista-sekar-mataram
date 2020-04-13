  <div id="contentWrapper" class="container-fluid">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        {slider}
        <li data-target="#demo" data-slide-to="{options_id}"></li>
        {/slider}
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        {slider}
        <div class="item" data-link="{options_link}">
          <img style="width: 100%" title="{options_title}" src="{options_contents}{base_url}assets/images/slide_show/{options_image}{/options_contents}" alt="" width="" height="">
          <div class="carousel-caption hidden-xs">
            {options_contents}{options_caption}{/options_contents}
          </div>
        </div>
        {/slider}
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  {home_page}
    {options_contents}
  {/home_page}