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

	<footer>
		Developed by {{ HTML::link('http://www.twitter.com/JonathanHindi', '@JonathanHindi', array('target' => '_blank')); }}. 
		Using {{ HTML::link('http://www.laravel.com', 'Laravel PHP Framework', array('target' => '_blank')); }} . For Educational Purposes.
	</footer>

	<script>
		$('textarea').height( $(window).height() - 100 );
		prettyPrint();
		$('textarea').tabby();
	</script>

</body>	
</html>