<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<title>@yield('title') | assort</title>
	<link href="css/app.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="/js/app.js"></script>
</head>
<body>
<article>
	@include('layout.side')
	@yield('content')
</article>
</body>
</html>