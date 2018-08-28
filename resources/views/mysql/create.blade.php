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
				<form action="/mysql" method="post">
					<fieldset>
						<legend>lamp207</legend> 
						<label>姓名:</label>
						{{csrf_field()}}
						<input type="text" name="username"/>
						<label>密码:</label>
						<input type="text" name="password"/>
						<label>邮箱:</label>
						<input type="text" name="email"/>
						<label>金额:</label>
						<input type="text" name="account" placeholder="只可填写数字"/>
						<button type="submit" class="btn">注册</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>