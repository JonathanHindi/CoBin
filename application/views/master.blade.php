<html>
<head>
	<title>CoBin . Share Your Code.</title>
	<head>
	    {{ Asset::styles() }}
	    {{ Asset::scripts() }}
	</head>
<body>
	
	<div class="container"> 
		@yield('container')
	</div>

	<script>
		$('textarea').height( $(window).height() - 50 );
		prettyPrint();
		$('textarea').tabby();
	</script>

</body>	
</html>