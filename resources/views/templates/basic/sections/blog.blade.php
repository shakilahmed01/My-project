
@php
  $blogContent= getContent('blog.content', false);
  $blogElements= getContent('blog.element', true);
@endphp

<div class="blog py-5 m-5">
    <div class="text badge bg-dark text-wrap py-3 my-3">
        <i class="fa-regular fa-user fa-5x text-white"></i>
        <h1 class="text fw-bolder text-white">Blog</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card grad">
                <div class="card-header">
                    <h1 class="text-white">this is a blog page</h1>
                </div>
                <div class="card-body">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatem nobis facilis corrupti delectus quasi, nam perferendis hic animi voluptatum eligendi reprehenderit aliquam. Aperiam nobis nesciunt reprehenderit, similique cupiditate molestias!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card grad">
                <div class="card-header">
                    <h1 class="text-white">this is a blog page</h1>
                </div>
                <div class="card-body">
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatem nobis facilis corrupti delectus quasi, nam perferendis hic animi voluptatum eligendi reprehenderit aliquam. Aperiam nobis nesciunt reprehenderit, similique cupiditate molestias!</p>
                </div>
            </div>
        </div>
    </div>
</div>

