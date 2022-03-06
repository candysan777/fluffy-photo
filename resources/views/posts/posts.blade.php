@if (count($posts) > 0)
        @foreach($posts as $post)
              <div class="mt-5 card border border-0">
                <img class="card-img-top" src="/images/sample1.jpg" width="400" height="300" alt="サンプル1">
                    <div class="card-body">
                          <img class="mt-0" src="{!! is_null($user->icon) ? asset('/images/default_icon.png') : $user->icon !!}" width="40" height="40">
                          <!-- ユーザーのアイコンがnullだったらデフォルトアイコンを表示する -->
                         {!! link_to_route('users.show',$post->user->name,['user' => '$post->user_id'],['class' => 'pl-2 link-light text-decoration-none align-middle']) !!}
                        <p class="card-text text-left mt-3">{!! nl2br(e($post->caption)) !!}</p>
                    </div>   
              </div>
        @endforeach

@endif