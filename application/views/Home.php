  <div id="contentWrapper" class="container-fluidXXX">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        {slider}
        <li data-target="#myCarousel" data-slide-to="{options_id}"></li>
        {/slider}
      </ul>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        {slider}
        <div class="carousel-item" data-bg-src="{options_contents}{base_url}assets/images/slide_show/{options_image}{/options_contents}">
          <!-- <img title="{options_title}" src="{options_contents}{base_url}assets/images/slide_show/{options_image}{/options_contents}" alt="" width="" height=""> -->
          <div class="carousel-caption hidden-xs">
            {options_contents}{options_caption}{/options_contents}
          </div>
        </div>
        {/slider}
    
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
  
  {home_page}
    {options_contents}
  {/home_page}