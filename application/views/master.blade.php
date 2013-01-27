<html>
<head>
	<title></title>
	{{ HTML::style('css/vendors/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
	@yield('stylesheets')
</head>
<body>
	
	<div class="container"> 
		@yield('container')
	</div>

	{{ HTML::script('js/vendors/jquery.js') }}
	{{ HTML::script('js/vendors/jquery.tabby.js') }}

	<script>
		$('textarea').tabby();
	</script>

	@yield('scripts')

</body>	
</html>