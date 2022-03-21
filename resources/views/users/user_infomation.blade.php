<div class="row my-5">
    <div class="col-4">
        <img class="my-0" src="{!! is_null($user->icon) ? asset('/images/default_icon.png') : $user->icon !!}" width="200" height="200">
    </div>
    <div class="col-8">
        <h2>{!! ($user->name) !!}</h2>
        <div class="">
            {!! link_to_route('posts.index','プロフィールを編集する',[],['class' => 'btn btn-light btn-lg']) !!}
            {!! link_to_route('posts.index','アカウントを削除する',[],['class' => 'btn btn-light btn-lg']) !!}
        </div>
    </div>
</div>