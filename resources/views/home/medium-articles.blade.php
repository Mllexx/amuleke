<ul class="row">
    @if ( isset($publications) && (!is_null($publications)) && (is_object($publications)) )
         @foreach ( $publications as $post_id => $post)
         <li class="col-3">
            <div class="image">
                <a href="https://medium.com/@amuleke/{{ $post->uniqueSlug }}"  target = "_blank">
                    <!--<img src="https://miro.medium.com/fit/c/300/180/{{ $post->virtuals->previewImage->imageId }}">-->
                    <img src="https://miro.medium.com/max/180/{{ $post->virtuals->previewImage->imageId }}">
                </a>
            </div>
            <h5>
                {{ $post->title }}
            </h5>
            <p>
                {{ $post->content->subtitle }}
            </p>
         </li>
         @endforeach
    @else
        <h3>No articles found</h3>
    @endif
</ul>
