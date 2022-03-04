<header class="mt-0">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#8E806A">
        <div class="container-fluid">
            {{-- トップページへのリンク --}}
            <a class="py-3 navbar-brand" href="/">Fluffy Photo</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    @if (Auth::check())
                        {{-- 投稿ページへのリンク --}}
                        {{-- 検索ページへのリンク --}}
                        {{-- ユーザー詳細ページへのリンク --}}
                        {{-- ログアウトへのリンク --}}
                        <a href="{!! URL::to('logout') !!}"><img src={!! asset('/images/logout-icon.png') !!} alt="ログアウト"></a>
                    @else
                        {{-- ユーザ登録ページへのリンク --}}
                        <li>{!! link_to_route('signup.get','会員登録',[],['class' => 'nav-link']) !!}</li>
                        {{-- ログインページへのリンク --}}
                        <li>{!! link_to_route('login','ログイン',[],['class' => 'nav-link']) !!}</li>          
                    @endif                
                </ul>
            </div>
        </div>
    </nav>
</header>