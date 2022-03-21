@extends('layouts.app')

@section('content')
        <div class="container pt-5">
        @include('posts.searchform')
        @isset($keyword) <!-- $keywordに値が入っている場合はtrue、空の場合はfalse -->
            <div class="col-sm-10 offset-sm-1 pb-5">
                <p class="pt-3">＃{{$keyword}}　の検索結果</p>
                    <div class="gallery">
                        @foreach($posts as $post)
                            @foreach($post->photos as $photo) 
                                
                                <a href="{{ route('posts.show',['post' => $post->id ]) }}"><img src={!! asset($photo->photo_url) !!} ></a>
                                
                            @endforeach
                        @endforeach
                    </div>
            </div>
        @endisset  
@endsection