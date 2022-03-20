@extends('layouts.app')

@section('content')
      <div class="my-5 card border border-1 mx-auto" style="max-width: 500px">
              <img class="card-img-top" src="{{ $photo->photo_url }}" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between"> 
                <div class="justify-content-start">
                  <!-- ユーザーのアイコン -->
                  <!-- ユーザーのアイコンがnullだったらデフォルトアイコンを表示する -->
                  <img class="mt-0" src="{!! is_null($user->icon) ? asset('/images/default_icon.png') : $user->icon !!}" width="40" height="40">
                  <!-- ユーザー名 -->
                 {!! link_to_route('users.show',$post->user->name,['user' => 'user_id'],['class' => 'pl-2 link-light text-decoration-none align-middle']) !!}
                </div>
                <div class="justify-content-end">
                  <!-- 削除ボタン -->
                  <form class="destroy-icon" action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="image" src="/images/destroy-icon1.png">
                  </form>
                </div>
              </div>
            <!-- キャプション -->
            <p class="card-text text-left mt-3">{!! nl2br(e($post->caption)) !!}</p>
            <!-- ハッシュタグ -->
              {!! link_to_route('posts.index','#'.$tag->name,[],['class' => 'pl-2 link-light text-decoration-none align-middle']) !!}
            </div>
      </div>
@endforeach


@endsection