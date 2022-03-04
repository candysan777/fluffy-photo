<!-- ナビゲーションバー、エラーメッセージなど -->
@extends('layouts.app') 

@section('content') 
    <div class="wrapper bg-primary">
        <div class="col-sm-6 offset-sm-3"> 
            <div class="main">
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="pt-5 pb-3 form-group">
                            {!! Form::label('email','メールアドレス') !!}
                            {!! Form::email('email',null,['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="pb-5 form-group">
                            {!! Form::label('password','パスワード') !!}
                            {!! Form::password('password',['class' => 'form-control']) !!}
                        </div>                    
    
                        <div class="text-center">
                            {!! Form::submit('ログイン',['class' => 'btn btn-light btn-lg']) !!}
                            <a type="button" class="btn btn-light btn-lg offset-sm-1" href="/">キャンセル</a>
                        </div>
                        
                    {!! Form::close() !!}
            <div class="pb-5 text-center text-secondary">
                {!! link_to_route('signup.get','アカウントをお持ちでない方',[],['class' => 'link-light text-decoration-none']) !!}
            </div>      
            </div>
        </div>
        <footer class="footer fixed-bottom bg-info">
            <!-- フッター -->
        </footer>
    </div>
@endsection