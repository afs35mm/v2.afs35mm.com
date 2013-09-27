
//ISOTOPE JAVASCRIPT
$('#filters a').click(function(){
  		var selector = $(this).attr('data-filter');
  		$('#main').isotope({ filter: selector });
  		return false;
	});
$(window).load(function(){
$('#main').isotope({
		// options
		animationEngine: 'bestAvailable',
		layoutMode : 'masonry',
		transformsEnabled: false,
		itemSelector : '.item',
		masonry : {
		columnWidth : 245
				   }
});
});

//ABOUT TOP SECTION SHOW /HIDE
$(".slick-show").click(function () {
    $("#slickbox").slideToggle("slow");
  $( 'html, body' ).animate( { scrollTop: 0 }, 'slow' );
});		

$("#cover, #ex").click(function () {
    $("#slickbox").slideToggle("fast");
});


//HOME IMAGE FADE IN
$(document).ready(function() {  
  $(window).load( function() {
      $('#loader img').fadeIn('slow');
  });
 });


     
 //TWITTER LOAD
$(document).ready(function() {
  $("#twitter").getTwitter({
    userName: "afs35mm",
    numTweets: 3,
    loaderText: "#TWITTERFAIL",
    slideIn: true,
    showHeading: false,
    headingText: "Latest Tweets",
    showProfileLink: false
  });
});
    