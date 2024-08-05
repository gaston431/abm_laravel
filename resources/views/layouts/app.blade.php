<!DOCTYPE html>
<html>
<head>
    <title>ABM Laravel</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>
<body>
	
	<div class="container">
		@yield('content')
	</div>
	
@yield('js')

</body>
</html>