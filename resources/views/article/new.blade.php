@extends('layout.default')
@section('css')
    <style>
        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="container" >
        <div class="col-md-8 offset-md-2">
            <h1>New Article </h1>
            <hr/>
            {!! Form::open() !!}
            <div class="form-group row required" >
                {!! Form::label("name","Author:",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')?" is-invalid":""),'placeholder'=>'Name', 'id'=>'author']) !!}
                    {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
            <div class="form-group row required">
                {!! Form::label("title","Title",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("title",null,["class"=>"form-control".($errors->has('title')?" is-invalid":""),'placeholder'=>'Title', 'id'=>'title']) !!}
                </div>
            </div>
            <div class="form-group row required">
                {!! Form::label("text","Text",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::textarea("text", null, ["class"=>"form-control".($errors->has('text')?" is-invalid":""), 'rows' => 12, 'cols' => 54, 'style' => 'resize:none', 'placeholder'=>'Article text', 'id'=>'text']) !!}
                    {!! $errors->first('text','<span class="invalid-feedback">:message</span>') !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 offset-md-2">
                    <a href="{{url('/')}}" class="btn btn-info">
                        Overview Page</a>
                </div>
                <div class="col-md-4">
                {!! Form::button("Discard changes",["type" => "reset","class"=>"btn
                btn-primary"])!!}
                    {!! Form::button("Save",["type" => "submit","class"=>"btn
                btn-primary"])!!}

                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection