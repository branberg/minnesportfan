<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This Little Piggy Stays Home | Minnesportsfan</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
	
	<link rel="icon" type="image/png" href="img/little-piggy-favicon.png" />
	
	<meta property="og:title" content="This Little Piggy Stays Home." />
	<meta property="og:type" content="sport" />
	<meta property="og:url" content="http://minnesportfan.com/littlepiggy/" />
	<meta property="og:image" content="http://minnesportfan.com/littlepiggy/img/little-piggy-graphic.png" />
	<meta property="og:site_name" content="This Little Piggy Stays Home" />
	<meta property="fb:admins" content="551680157" />
	<meta property="og:description" content="This little piggy stays home, in Minnesota!  Keep Floyd of Rosedale!" />
	
	<script type="text/javascript">
	
	$(document).ready(function(){
		/*
		var creditHeight = $('#credits').outerHeight();
		var contentHeight = $('#vcenter').outerHeight();
		var windowHeight = $(window).height();
		
		var whiteSpace = windowHeight - ( creditHeight + contentHeight + 80 );
		var topMargin = whiteSpace / 2;
		
		$('#vcenter').css( 'margin-top', topMargin );
		*/
		
		var contentHeight = $('#vcenter').outerHeight();
		var creditHeight = $('#credits').outerHeight();
		var windowHeight = $(window).height();
		
		var totalContent = contentHeight + creditHeight;
		
		if( ( windowHeight < totalContent ) || (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) ) {
			$('#vcenter').removeClass('tall');
			$('#vcenter').addClass('short');
			$('#credits').removeClass('tall');
			$('#credits').addClass('short');
		}
		
		console.log(contentHeight);
		console.log(creditHeight);
		console.log(windowHeight);
	});
	
	
	
	</script>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-35139405-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
</head>
<body>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=125340000882567";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div id="wrapper">
		
		<div id="vcenter" class="tall">
			<div id="main-image">
				<img src="img/little-piggy.png" alt="" />
			</div>
			
			<h1 id="blurb">This little piggy stays home.</h1>
			
			<div id="social-likes">
				
				<div class="fb-like" data-href="http://minnesportfan.com/littlepiggy/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
			
				<a href="https://twitter.com/share" class="twitter-share-button" data-text="This Little Piggy Stays Home | @gophersports">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				
				<div style="clear: both;"></div>
				
			</div>
		</div>
		
		<div id="credits" class="tall">
			<a href="/"><span id="copyright">Minnesportfan &copy;<?php echo date('Y'); ?></span></a>
			<a href="/"><img src="img/MNSFlogo.png" alt="Minnesportfan Logo" /></a>
			<span id="branberg">Designed by <a href="http://branberg.com" target="_blank">Branberg</a></span>
		</div>
		
	</div>
	
</body>
</html>