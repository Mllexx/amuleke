<ul class="row">
    @if ( isset($publications) && (!is_null($publications)) )
         @foreach ( $publications as $post_id => $post)
         <li class="">
            <div class="image">
                <a href="https://medium.com/@amuleke/{{ $post->uniqueSlug }}"  target = "_blank">
                    <img src="https://miro.medium.com/fit/c/1400/600/{{ $post->virtuals->previewImage->imageId }}">
                </a>
            </div>
            <h3>
                {{ $post->title }}
            </h3>
            <p>
                {{ $post->content->subtitle }}
            </p>
         </li>        
         @endforeach
    @endif
</ul>