<!-- ナビゲーションバー、エラーメッセージなど -->
@extends('layouts.app') 

@section('content')
        <div class="mt-0">
            <img class="img-fluid" src="/images/main_visual1.jpg">
        </div>
        <div id="wrapper">
            <div class="main">
               <div class="pt-5 pb-5 text-white text-center bg-primary">
                    <h1>About Fluffy Photo</h1>
                    <ul>ぬいぐるみを主役にした写真を、様々な場所で撮る「ぬい撮り」。</ul>
                    <ul>おでかけ先で、人気のスポットで、話題のスイーツとともに･･･</ul>
                    <ul>Fluffy Photoは、そんな「ぬい撮り」の写真投稿サイトです。</ul>
                </div>
                <div class="pt-5 pb-5 text-center text-secondary">
                    <h3>みんなの投稿</h3>
                    
                </div>
                <div class="pt-5 pb-5 text-center bg-primary">
                    <ul>さあ、あなたもとっておきの一枚を投稿しませんか。</ul>
                    <a type="button" class="btn btn-light btn-lg" href="#">ログイン</a>
                    <a type="button" class="btn btn-light btn-lg" href="#">会員登録</a>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="bg-info">
                
            </div>    
        </div>

@endsection