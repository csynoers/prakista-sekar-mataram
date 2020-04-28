<div id="contentWrapper" class="container-fluidXXX">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
            {options}
                <li class="breadcrumb-item active" aria-current="page">{options_title}</li>
            {/options}
        </ol>
    </nav>
    {post}
        <div class="media border p-3">
            <div class="row">
                <div class="col-sm-2">
                    <img src="<?= base_url('assets/images/post/{post_src}') ?>" alt="John Doe" class="mr-3 img-fluid">
                </div>
                <div class="col-sm-10">
                    <h4>{post_title} <small><i class="material-icons">date_range</i><i>{post_timestamp}</i></small></h4>
                    <p class="text-justify">{post_contents}</p>
                    <a class="btn btn-outline-danger" href="artikel/detail/{post_seo}/{post_id}" role="button">Selengkapnya</a>
                </div>
            </div>
        </div>
    {/post}
</div>