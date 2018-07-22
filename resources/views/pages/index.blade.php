 @extends('layouts.app')


  @section('content')
  <div class="jumbotron text-center">
  	
  	<h1>{{ $title }}</h1>
	<h2>Welcome to the app!</h2>
	<p> 
		<a href="/login" class="btn btn-primary btn-lg">Login</a>
		<a href="/signup"class="btn btn-primary btn-lg">Register</a>
	</p>


  </div>
	
 @endsection

