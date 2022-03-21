@if (count($posts) > 0)
<div class="gallery">
    @foreach($posts as $post)
        
            @foreach($post->photos as $photo)
              <a href="{{ route('posts.show',['post' => $post->id ]) }}"><img src={!! asset($photo->photo_url) !!} ></a>
            @endforeach
        
    @endforeach
</div>
@endif