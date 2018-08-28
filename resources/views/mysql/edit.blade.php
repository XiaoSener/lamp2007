<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
			<?php $array = (array)$res ?>
				<form action="/mysql/{{$array['id']}}" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
					<fieldset>
						<legend>lamp207</legend> 
						
						<label>姓名:</label>
						{{csrf_field()}}
						<input type="text" name="username" value="{{$array['username']}}">
						<label>密码:</label>
						<input type="text" name="password" value="{{$array['password']}}"/>
						<label>邮箱:</label>
						<input type="text" name="email" value="{{$array['email']}}"/>
						<label>金额:</label>
						<input type="text" name="account" value="{{$array['account']}}"/>
						<button type="submit" class="btn  btn-success">确认修改</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>