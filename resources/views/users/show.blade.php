@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    @include('users.user_infomation')
                    @include('posts.posts')
                </div>
            </div>
        </div>
    @endif
@endsection

