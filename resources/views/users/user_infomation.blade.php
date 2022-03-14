<div class="row mt-5">
    <div class="col-4">
        <img class="mt-0" src="{!! is_null($user->icon) ? asset('/images/default_icon.png') : $user->icon !!}" width="200" height="200">
    </div>
    <div class="col-8">
        <h2>{!! ($user->name) !!}</h2>
    </div>
</div>