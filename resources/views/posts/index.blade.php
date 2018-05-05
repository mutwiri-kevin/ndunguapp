@extends('layouts.app')

@section('content')
    <h1> Listings </h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    </div>
                </div>

            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p> No  property listings available yet </p>
    @endif

    <footer class="container">
        <p>&copy; Billboard Property Management 2018</p>
    </footer>
@endsection