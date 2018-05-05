@extends('layouts.app')

@section('content')
 <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
            <h1> {{$title}} </h1>
            @if(Auth::guest())
            <p> <a class="btn btn-primary btn-lg" href="/login" role="button">Login </a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
            </p>
            @endif
    </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3">
            <h2>Property Management</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2>Property Sales</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2>Graphic Design</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2>Architectural Drawings</h2>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Billboard Property Management 2018</p>
    </footer>
@endsection