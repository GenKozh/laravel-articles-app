@extends('layout.default')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h1>{{'Details page'}} </h1>
            <hr/>
                {!! Form::model($article,['method'=>'put']) !!}
            <div class="form-group row ">
                {!! Form::label("name","Author:",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("name",null,["class"=>"form-control".($errors->has('name')?" is-invalid":""),"autofocus",'placeholder'=>'Name', 'disabled' => 'disabled']) !!}
                </div>
            </div>
            <div class="form-group row ">
                {!! Form::label("title","Title:",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::text("title",null,["class"=>"form-control".($errors->has('title')?" is-invalid":""),"autofocus",'placeholder'=>'Title', 'disabled' => 'disabled']) !!}
                </div>
            </div>
            <div class="form-group row ">
                {!! Form::label("text","Text:",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
                <div class="col-md-8">
                    {!! Form::textarea("text", null, ["class"=>"form-control".($errors->has('text')?" is-invalid":""), 'rows' => 12, 'cols' => 54, 'style' => 'resize:none', 'placeholder'=>'Article text', 'disabled' => 'disabled']) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 offset-md-2">
                    <a href="{{url('/')}}" class="btn btn-info">
                        Overview Page</a>
                </div>
                <div class="col-md-5 offset-md-1">
                    <a href="{{url('/update/'.$article->id)}}" class="btn btn-danger">
                        Edit Page</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection