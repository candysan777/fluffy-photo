@if (count($posts) > 0)

        @foreach($posts as $post)
              <div class="my-5 card border border-1 mx-auto" style="max-width: 500px">
                    @foreach($post->photos as $photo)
                      <img class="card-img-top" src="{{ $photo->photo_url }}" alt="">
                    @endforeach
                    <div class="card-body">
                          <img class="mt-0" src="{!! is_null($user->icon) ? asset('/images/default_icon.png') : $user->icon !!}" width="40" height="40">
                          <!-- ユーザーのアイコンがnullだったらデフォルトアイコンを表示する -->
                         {!! link_to_route('users.show',$post->user->name,['user' => 'user_id'],['class' => 'pl-2 link-light text-decoration-none align-middle']) !!}
                          
                          <form class="destroy-icon" action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="image" src="/images/destroy-icon1.png">
                          </form>
                        <p class="card-text text-left mt-3">{!! nl2br(e($post->caption)) !!}</p>
                    @foreach($post->tags as $tag)
                      {!! link_to_route('posts.index','#'.$tag->name,[],['class' => 'pl-2 link-light text-decoration-none align-middle']) !!}
                    @endforeach
                    </div> 
              </div>
        @endforeach

@endif