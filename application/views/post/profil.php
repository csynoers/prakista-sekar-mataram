<div id="contentWrapper" class="container">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
            {options}
                <li class="breadcrumb-item"><a href="javascript: void(0)">{options_title}</a></li>
            {/options}
            {post}
            <li class="breadcrumb-item active" aria-current="page">{post_title}</li>
            {/post}
        </ol>
    </nav>
    {post}
        <h4 class="card-title">{post_title}</h4>
        <img class="card-img-topXXX img-fluid {display_src}" src="<?= base_url('assets/images/post/{post_src}') ?>" alt="Card image" style="display: block;margin-left: auto;margin-right: auto;">
        <p class="card-text text-justify">{post_contents}</p>
    {/post}
</div>