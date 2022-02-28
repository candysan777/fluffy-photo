<!-- ナビゲーションバー、エラーメッセージなど -->
@extends('layouts.app') 

@section('content') 
    <div class="bg-primary">
        <div class="col-sm-6 offset-sm-3"> <!-- 画面がsmの時は6カラム、画面がlgの時は4カラムで表示 -->
            <div class="pt-3 text-center text-secondary">
                <h1>ユーザー登録</h1>
            </div>
            <div class="text-secondary">
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
                        {!! Form::label('password','パスワード') !!}
                        {!! Form::password('password',['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="pt-3 form-group">
                        {!! Form::label('password_confirmation','パスワード再入力') !!}
                        {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="pt-3 text-center">
                        {!! Form::submit('登録',['class' => 'btn btn-light btn-lg']) !!}
                    </div>
                {{ Form::close() }}
            </div>    
        </div>
        <footer class="footer bg-info">
            <!-- フッター -->
        </footer>
    </div>
@endsection