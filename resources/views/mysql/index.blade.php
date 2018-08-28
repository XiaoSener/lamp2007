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
			<table class="table">
				<thead>
					<tr>
						<th>
							ID
						</th>
						<th>
							姓名
						</th>
						<th>
							密码
						</th>
						<th>
							邮箱
						</th>
						<th>
							金额
						</th>
						<th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>

				@foreach($data as $v)
				<?php $array = (array)$v; ?>
					<tr class="success">
						<td>
							{{$array['id']}}
						</td>
						<td>
							{{$array['username']}}
						</td>
						<td>
							{{$array['password']}}
						</td>
						<td>
							{{$array['email']}}
						</td>
						<td>
							{{$array['account']}}
						</td>
						<td>
							<a href="/mysql/{{$array['id']}}/edit">
								<button class="btn btn-primary" type="button">修改</button>
							</a>
							<form action="/mysql/{{$array['id']}}" method="POST">
								<button class="btn btn-danger" type="submit">删除</button>
								{{csrf_field()}}
								{{method_field('DELETE')}}
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>