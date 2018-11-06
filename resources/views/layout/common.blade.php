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
	<div class="main_content">
		<h1 id="title">商品検索画面</h1>
		@yield('content')
	</div>
</article>
</body>
</html>