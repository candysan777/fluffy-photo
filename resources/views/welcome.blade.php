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
                    <div class="container">
                        <div class="card-deck">
                          <div class="card">
                           <img class="card-img-top" src="/images/sample1.jpg" alt="サンプル1">
                           <div class="card-body">
                              <h5 class="card-title text-left"><img class="icon" src="/images/default_icon.png" width="50" height="50" alt="アイコン">サンプルユーザー1</h5>
                              <p class="card-text text-left">コメント1</p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="/images/sample2-1.jpg" alt="サンプル2">
                            <div class="card-body">
                              <h5 class="card-title text-left"><img class="icon" src="/images/default_icon.png" width="50" height="50" alt="アイコン">サンプルユーザー2</h5>
                              <p class="card-text text-left">コメント2</p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="/images/sample3-1.jpg" alt="サンプル3">
                            <div class="card-body">
                              <h5 class="card-title text-left"><img class="icon" src="/images/default_icon.png" width="50" height="50" alt="アイコン">サンプルユーザー3</h5>
                              <p class="card-text text-left">コメント3</p>
                            </div>
                          </div>
                        </div>
                        </div>
                </div>
                <div class="pt-5 pb-5 text-center bg-primary">
                    <ul>さあ、あなたもとっておきの一枚を投稿しませんか。</ul>
                    <a type="button" class="btn btn-light btn-lg" href="#">ログイン</a>
                    <a type="button" class="btn btn-light btn-lg" href="#">会員登録</a>
                </div>
            </div>
        </div>
        <footer class="footer bg-info">
            <!-- フッター -->
        </footer>

@endsection