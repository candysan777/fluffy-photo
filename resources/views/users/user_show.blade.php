@extends('layouts.app')

@section('content')
        @if (Auth::check())  
            <div class="container">
                <div class="col-sm-10 offset-sm-1 pb-5">
                        @include('users.user_infomation')
                        
                        @include('users.user_posts')
                </div>
            </div>
        @endif
@endsection

