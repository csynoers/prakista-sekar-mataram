<div id="contentWrapper" class="container-fluidXXX">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
            {produk}
                <li class="breadcrumb-item"><a href="javascript: void(0)">{options_title}</a></li>
            {/produk}
            {kategori}
                <li class="breadcrumb-item"><a href="{href}">{options_title}</a></li>
            {/kategori}
            {post}
                <li class="breadcrumb-item active" aria-current="page">{post_title}</li>
            {/post}
        </ol>
    </nav>
    {post}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{post_title} <br><small><i class="material-icons">date_range</i><i>{post_timestamp}</i></small></h4>
                <img class="card-img-top img-fluidXXX {display_src}" src="<?= base_url('assets/images/post/{post_src}') ?>" alt="Card image">
                <p class="card-text text-justify">{post_contents}</p>
            </div>
        </div>
    {/post}
</div>