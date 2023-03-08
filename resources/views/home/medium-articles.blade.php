<ul class="row">
    @if ( isset($publications) && (!is_null($publications)) && (is_object($publications)) )
         @foreach ( $publications as $post_id => $post)
         <li class="col-sm-6 col-xs-12 col-lg-3">
            <div class="image">
                <a href="https://medium.com/@amuleke/{{ $post->uniqueSlug }}"  target = "_blank">
                    <!--<img src="https://miro.medium.com/fit/c/300/180/{{ $post->virtuals->previewImage->imageId }}">-->
                        @if( isset($post->virtuals->previewImage->imageId) && $post->virtuals->previewImage->imageId !== '' )
                            <img src="https://miro.medium.com/max/180/{{ $post->virtuals->previewImage->imageId }}">
                        @else
                            <img src="{{ asset('img/quill.png')}}" width="100px">
                        @endif
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
