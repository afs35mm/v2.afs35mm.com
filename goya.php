<?php $thisPage="goya"; ?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>AFS35MM | Goya</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="js/jquery.1.6.2.min.js"><\/script>')</script>
  <script src="js/libs/modernizr-1.7.min.js"></script>

  <script src="js/lazyload.js" type="text/javascript"></script>
  <script type="text/javascript">
	$(function() {	  
	  $("#center img").lazyload({
		     effect       : "fadeIn",
		     threshold : -200 
		 });
	});
  </script>

  
</head>

<body>

		
<div id="container">
					
				<?php include("navigation.php"); ?>

				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
    <div id="main-item">

		<div id="center">
			<div id="column">
				<div id="item-head">
					<p id="about">Web and Email Production for Goya.com. Visit <a href="http://www.goya.com" target="_blank" >Goya.com</a>.</p>
					<div class="clr"></div>
				</div>
				<div id="item-bar">
					<p>Role:</p>
					<ul>
						<li class="last">Web and Email Production</li>
					</ul>
				</div>
				
				
				<img src="images/spacer.gif" data-original="images/goya1.jpg" />
				
				<img src="images/spacer.gif" data-original="images/goya2.jpg" />
				
				<img src="images/spacer.gif" data-original="images/goya3.jpg" />
		
				</div>
			</div>
		</div>
	</div>
    
  </div>
</div>

<?php include("footer.php"); ?>  
  
	

 
</body>
</html>