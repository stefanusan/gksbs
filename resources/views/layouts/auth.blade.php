<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('custom-css')
	<title>GKSBS</title>
</head>

<body class="hold-transition login-page">
	@yield('content')
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
  	@yield('custom-js')
</body>

</html>