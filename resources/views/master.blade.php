<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Template</title>
	<link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }} ">
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	@yield('footer')

<script type="text/javascript" src=" {{ asset('/js/bootstrap.min.js') }} "></script>
</body>
</html>