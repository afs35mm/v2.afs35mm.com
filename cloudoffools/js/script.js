$('document').ready(function(){

  
  //plugin for animating backgtound
  $.supersized({
    // Functionality
    slide_interval          :   1800,   // Length between transitions
    transition              :   1,      // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
    transition_speed    : 2000,    // Speed of transition
                           
    // Components             
    slide_links       : 'blank',  // Individual links for each slide (Options: false, 'num', 'name', 'blank')
    slides          :   [     // Slideshow Images
                     
                      {image : 'img/bg/bg1.jpg'},  
                      {image : 'img/bg/bg2.jpg'},
                      {image : 'img/bg/bg3.jpg'},
                      {image : 'img/bg/bg4.jpg'},
                      {image : 'img/bg/bg5.jpg'}
    ]
  });

  var currentPanel,thisClass;

  var hash = window.location.hash.substr(1);  
  console.log(hash);
  var href = $('.nav li a').each(function(){  
      var href = $(this).attr('href');  
      if(hash==href.substr(0,href.length-5)){  
        var toLoad = hash+'.html #content'; 
        $('.area').load(toLoad) 
        currentPanel = hash;
        $('#' + hash).animate({'margin-left' : '0%'});
        $('.nav li a.' + hash).attr('id', 'active');
      }  
  }); 


  $('.nav li a').on('click', function(e){
    e.preventDefault();
    thisClass = $(this).attr('class');
    //console.log(thisClass);
    if(currentPanel != thisClass){
      $(this).attr('id', 'active').parents().siblings().children().removeAttr('id', 'active');
      //console.log(this);
      window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5); 
      //console.log(thisClass);
      $('#' + thisClass + ' .area').load(thisClass + '.html');
      $('#' + currentPanel).animate({'margin-left' : '-102%'});
      $('#' + thisClass).animate({'margin-left' : '0%'});
      
      currentPanel = thisClass;
    }else{
      //console.log('same one!');
      return;
    }
    
  });
  
  $('.nav .home').on('click', function(){
    $('#' + currentPanel).animate({'margin-left' : '-102%'});
    $('.nav li a').attr('id', 'active').parents().siblings().children().removeAttr('id', 'active');
    currentPanel = 'home';
  });

});