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
                    <a class="menu-icon" href="{{ route('posts.create',['user' => Auth::id()]) }}"><img src={!! asset('/images/post-icon2.png') !!} alt="投稿"></a>
                    {{-- 検索ページへのリンク --}}
                    <a class="menu-icon ml-3" href="{{ route('post.search') }}"><img src={!! asset('/images/search-icon2.png') !!} alt="検索"></a>
                    {{-- ユーザー詳細ページへのリンク --}}
                    <a class="menu-icon ml-3" href="{{ route('users.show',['user' => Auth::id()]) }}"><img src={!! asset('/images/profile-icon2.png') !!} alt="プロフィール"></a>
                    {{-- ログアウトへのリンク --}}
                    <a class="menu-icon ml-3" href="{!! URL::to('logout') !!}"><img src={!! asset('/images/logout-icon2.png') !!} alt="ログアウト"></a>
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
