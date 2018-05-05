@extends('layouts.app')

@section('content')
    <h1> Create Property Listing </h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=> "POST", 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title'])}}
        </div>    
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Bodytext'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}

    <footer class="container">
        <p>&copy; Billboard Property Management 2018</p>
    </footer>
@endsection