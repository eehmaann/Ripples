<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>
		@yield('title','Session')
	</title>
	@yield('js')
<link href="/css/app.css" type='text/css' rel='stylesheet'>

</head>

	<body>
	<header>
	<h1> Session</h1>
	<nav>
    <ul>
            <li><a href='#'>Home</a></li>
            <li><a href='#'>Heart Wall</a></li>
            <li><a href='#'>Past Life</a></li>
    </ul>
</nav>
	</header>
	<section>
		@yield('content')

	</section>
		
	</body>

</html>