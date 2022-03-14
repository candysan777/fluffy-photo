@extends('layouts.app')

@section('content')
        <div class="py-5 container">
                <div class="col-sm-8 offset-sm-2">
   
                    <img id="upimage">
                    {!! Form::open(['route' => 'posts.store','id' => 'upfile','files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('photo_url','　') !!}
                            {!! Form::file('image',['class' => 'form-control-file']) !!}
                        </div>           
                        
                    
                        <div class="form-group">
                            {!! Form::label('caption','　') !!}
                            {!! Form::textarea('caption','',['class' => 'form-control','rows' => '4','placeholder' => "キャプションを入力..."]) !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="tags">
                                ハッシュタグ
                            </label>
                            <input
                                id="tags"
                                name="tags"
                                class="form-control {{ $errors->has('tags') ? 'is-invalid' : ''}} 
                                placeholder="＃"
                                value="{{ old('tags') }}"
                                type="text"
                            >
                            @if ($errors->has('tags'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tags') }}
                                </div>
                            @endif
                            
                        </div>
                        
                        <div class="text-center">
                            {!! Form::submit('投稿',['class' => 'btn btn-light btn-lg']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
        </div>

@endsection