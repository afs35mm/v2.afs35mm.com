<?php $thisPage="html5-canvas"; ?>

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>AFS35MM | HTML5 Canvas</title>
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
          $("img").lazyload({
             placeholder : "imges/loading.gif",
             effect      : "fadeIn"
          });
      });
  </script>

<script type='text/javascript'>
$(window).load(function(){
// get the canvas element using the DOM
var canvas = document.getElementById('c');
if (canvas.getContext) {
    var ctx = canvas.getContext('2d');
    var radius = 7;
    var moveX = 50;
    var moveY = 50;
    var steps = 390;
    var ampX = 6.4;
    var ampY = 6.4;
    var pie = Math.PI;

    ctx.beginPath();
    ctx.moveTo((canvas.width / 2), canvas.height);
    ctx.lineTo((canvas.width / 2), 0);
    ctx.moveTo(0, (canvas.height / 2));
    ctx.lineTo(canvas.width, (canvas.height / 2));
    ctx.stroke();

    for (j = 0; j < steps; j++) {
        var r = Math.floor(Math.random() * 256);
        var g = Math.floor(Math.random() * 256);
        var b = Math.floor(Math.random() * 256);
        ctx.beginPath();
        ctx.arc(moveX + (canvas.height / 2) - 50, moveY + (canvas.height / 2) - 50, radius, 0, Math.PI * 2, true);
        ctx.fillStyle = 'rgba(' + b + ',' + b + ',' + 250 + ',.8)';
        ctx.fill();
        moveX = moveX += (Math.sin(pie)) * ampX;
        moveY = moveY += (Math.cos(pie)) * ampY;
        ampY += 0.2;
        ampX += 0.2;
        pie = (pie += 0.2);
        radius = radius += 0.1;
    }
}
});

</script>
<script type='text/javascript'>
$(window).load(function(){

var canvas = document.getElementById('b');
if (canvas.getContext) {
    var ctx = canvas.getContext('2d');
    var y = 150;
    var x = 310;
    var r = Math.floor(Math.random() * 256);
    var g = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);
    var r2 = r;
    var g2 = g;
    var b2 = b;

    function draw() {

        ctx.clearRect(0, 0, 620, 300);
        ctx.beginPath();
        ctx.fillStyle = 'rgba(' + r + ',' + b + ',' + g + ',1)';
        ctx.arc(x, y, (r * 1.5), 0, Math.PI * 2, true);
        ctx.closePath();
        ctx.fill();

        if (r2 == r) {
            r2 = r;
            r++;
        }
        if (r2 < r) {
            r2 = r;
            r++;
        }
        if (r2 > r) {
            r2 = r;
            r--;
        }
        if (r >= 255) {
            r = 254;
            r2 = r;
            r--;
        }
        if (r <= 0) {
            r = 1;
            r2 = r;
            r++;
        }
        
        
        if (g2 == g) {
            g2 = g;
            g+=2;
        }
        if (g2 < g) {
            g2 = g;
            g+=2;
        }
        if (g2 > g) {
            g2 = g;
            g-=2;
        }
        if (g >= 255) {
            g = 254;
            g2 = g;
            g-=2;
        }
        if (g <= 0) {
            g = 1;
            g2 = g;
            g+=2;
        }
        
        
        if (b2 == b) {
            b2 = b;
            b+=2;
        }
        if (b2 < b) {
            b2 = b;
            b+=2;
        }
        if (b2 > b) {
            b2 = b;
            b-=2;
        }
        if (b >= 255) {
            b = 254;
            b2 = b;
            b-=2;
        }
        if (b <= 0) {
            b = 1;
            b2 = b;
            b+=2;
        }

    }
    setInterval(draw, 10);
}
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
					<p id="about">Experimental HTML5 Work done with the canvas element. </p>
					<div class="clr"></div>
				</div>
				<div id="item-bar">
					<p>Role:</p>
					<ul>
						<li class="last">Web production</li>
					</ul>
				</div>
				
				
				<canvas id="c" width="620" height="620"></canvas>​

<br><br><br><br><br><br>





<h5 class="pre">Above pattern generated with...</h5>
<pre>
for (j = 0; j < steps; j++) {
    var r = Math.floor(Math.random() * 256);
    var g = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);
    ctx.beginPath();
    ctx.arc(moveX + (canvas.height / 2) - 50, moveY + (canvas.height / 2) - 50, radius, 0, Math.PI * 2, true);
    ctx.fillStyle = 'rgba(' + b + ',' + b + ',' + 250 + ',.8)';
    ctx.fill();
    moveX = moveX += (Math.sin(pie)) * ampX;
    moveY = moveY += (Math.cos(pie)) * ampY;
    ampY += 0.2;
    ampX += 0.2;
    pie = (pie += 0.2);
    radius = radius += 0.1;
}
</pre>

			<canvas id="b" width="620" height="300"></canvas>
<h5 class="pre">Above pattern generated with...</h5>
<pre>
function draw() {
	ctx.clearRect(0, 0, 620, 300);
	ctx.beginPath();
	ctx.fillStyle = 'rgba(' + r + ',' + b + ',' + g + ',1)';
	ctx.arc(x, y, (r * 1.5), 0, Math.PI * 2, true);
	ctx.closePath();
	ctx.fill();

	if (r2 == r) {r2 = r; r++;}
	if (r2 < r) {r2 = r; r++;}
	if (r2 > r) {r2 = r; r--;}
	if (r >= 255) {r = 254; r2 = r; r--;}
	if (r <= 0) {r = 1; r2 = r; r++;}
	        
	if (g2 == g) {g2 = g; g++;}
	if (g2 < g) {g2 = g; g++;}
	if (g2 > g) {g2 = g; g--;}
	if (g >= 255) {g = 254; g2 = g; g--;}
	if (g <= 0) {g = 1; g2 = g; g++;}
	               
	if (b2 == b) {b2 = b; b++;}
	if (b2 < b) {b2 = b; b++;}
	if (b2 > b) {b2 = b; b--;}
	if (b >= 255) {b = 254; b2 = b; b--;}
	if (b <= 0) {b = 1; b2 = b; b++;}
}
    
</pre>


				</div>
			</div>
		</div>
	</div>
    
  </div>
</div>

<?php include("footer.php"); ?>  
  
	

 
</body>
</html>