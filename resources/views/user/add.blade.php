<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
</head>
<body>
	@include('layouts/header')
	<h1>{{$username or "游客"}}</h1>
	<h2>{{$title}}</h2>
	{{date('Y-m-d')}}
	<p>{{$content}}</p>
	<p>{!!$page!!}</p>
	@include('layouts/footer')

</body>
</html>