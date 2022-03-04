<!-- ナビゲーションバー、エラーメッセージなど -->
@extends('layouts.app') 

@section('content') 
    <div class="wrapper bg-primary">
        <div class="col-sm-6 offset-sm-3"> 
            <div class="main">

                    {!! Form::open(['route' => 'signup.post']) !!}
                        <div class="pt-5 form-group">
                            {!! Form::label('name','ユーザーネーム') !!}
                            {!! Form::text('name',null,['class' => 'form-control']) !!}
                        </div>    
                        
                        <div class="pt-3 form-group">
                            {!! Form::label('email','メールアドレス') !!}
                            {!! Form::email('email',null,['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="pt-3 form-group">
                            {!! Form::label('password','パスワード(英数字8文字以上)') !!}
                            {!! Form::password('password',['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="pt-3 form-group">
                            {!! Form::label('password_confirmation','パスワード再入力') !!}
                            {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="pt-3 text-center">
                            {!! Form::submit('登録する',['class' => 'btn btn-light btn-lg']) !!}
                            <a type="button" class="btn btn-light btn-lg offset-sm-1" href="/">キャンセル</a>
                        </div>
                    {{ Form::close() }}
    
                <div class="pb-5 text-center text-secondary">
                    {!! link_to_route('login','アカウントをお持ちの方',[],['class' => 'link-light text-decoration-none']) !!}
                </div>
            </div>
        </div>
        <footer class="footer bg-info">
            <!-- フッター -->
        </footer>
    </div>
@endsection