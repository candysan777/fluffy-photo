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
                    {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get','会員登録',[],['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav item">
                        <a class="nav-link" href="#">ログイン</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>