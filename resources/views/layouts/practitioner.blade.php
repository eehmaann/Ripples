<!doctype html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/css/app.css" type='text/css' rel='stylesheet'>
    <link href="/css/main.css" type="text/css" rel='stylesheet'>

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
	</header>
	<section>
		@yield('content')

	</section>
		
	</body>

</html>