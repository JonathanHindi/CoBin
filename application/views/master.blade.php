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
		// Auto Setting the textarea height accoring to the window size.
		$('textarea').height( $(window).height() - 100 );
		
		// Running code prettify
		prettyPrint();

		// Running tabby on textarea
		$('textarea').tabby();

		// Creatting the copy to clippboard link
		// @TODO Disable popup and add a nice slidedown notification or effect.
		$(document).ready(function(){

		    $('a#copy-snippet').zclip({
		        path:'js/vendors/zeroclip/ZeroClipboard.swf',
		        copy:$('pre.snippet-code').text()
		    });
		});
	</script>

</body>	
</html>