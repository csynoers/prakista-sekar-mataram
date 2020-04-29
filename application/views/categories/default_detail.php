<div id="contentWrapper" class="container-fluidXXX">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
            <li class="breadcrumb-item">Search</li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>
    {contents}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{post_title} <br><small><i class="material-icons">date_range</i><i>{post_timestamp}</i></small></h4>
                <img class="card-img-top img-fluidXXX {display_src}" src="{post_src}" alt="Card image">
                <p class="card-text text-justify">{post_contents}</p>
            </div>
        </div>
    {/contents}
</div>