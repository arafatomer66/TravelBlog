<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>{{config('app.name','travelBlog')}}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body >

	@include('inc.navbar');

<div class="container">
	
@yield('content')

</div>
	
</body>
</html>