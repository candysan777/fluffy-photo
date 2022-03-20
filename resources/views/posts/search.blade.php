@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container py-5">
                @include('posts.searchform')
        @isset($keyword) <!-- $keywordに値が入っている場合はtrue、空の場合はfalse -->
            <div class="col-sm-8 offset-sm-2">
                    <p class="pt-3">＃{{$keyword}}の検索結果</p>
                    @foreach($posts as $post)
                            @foreach($post->photos as $photo)
                                <a class="card-img-top posted-photo" href="{{ route('posts.index') }}"><img src={!! asset($photo->photo_url) !!}></a>
                            @endforeach
                    @endforeach
            </div>
        @endisset    
        </div>
    </div>
@endsection