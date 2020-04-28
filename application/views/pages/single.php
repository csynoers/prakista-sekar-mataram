<div id="contentWrapper" class="container-fluidXXX">
    <nav class="mt-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{base_url}">Home</a></li>
			<li class="breadcrumb-item"><a href="javascript: void(0)">Halaman</a></li>
            {pages}
            <li class="breadcrumb-item active" aria-current="page">{pages_title}</li>
            {/pages}
        </ol>
    </nav>
    {pages}
		{msg}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{pages_title}</h4>
                <p class="card-text text-justify">{pages_contents}</p>
            </div>
        </div>
		{pages_media}
    {/pages}
</div>