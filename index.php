<?php

define('Description', 'Description'); 
define('Content', 'Content'); 
$data = array(
			
			array(
			Description => "info",
			Content => "info.php"
			),
			array(
			Description => "kontakt",
			Content => "kontakt.php"
			),
			array(
			Description => "preise",
			Content => "preise.php"
			),
			array(
			Description => "team",
			Content => "team.php"
			),
			array(
			Description => "photos",
			Content => "photos.php"
			),
			array(
			Description => "bewertungen",
			Content => "comments.php"
			)
		);
	

$dataCount = count($data);


?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://opengraphprotocol.org/schema/">
<!--<html xmlns:fb="http://ogp.me/ns/fb#">-->
<head>
	<!--<meta name="viewport" content="width=device-width">-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="og:title" content="ARSO Umzugs - und Neubaureinigung"/>
	<meta property="og:description" content="ARSO Umzugs - und Neubaureinigung" />
	 <meta property="og:type" content="website"/>
	 <meta property="og:url" content=""/>
	 <meta property="og:site_name" content="ARSO Umzugs - und Neubaureinigung"/>
	 <meta name="description" content="ARSO Reinigung. Umzugs - und Neubaureinigung. ">
	 <meta name="Keywords" content="arso umzug neubau umzugsreinigung neubaureinigung reinigung putzen oetwil zürich oberland zürcher abgabegarantie">
	<title>ARSO Umzugs - und Neubaureinigung</title>
<link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="script/gs/plugins/CSSPlugin.min.js" type="text/javascript"></script>
<script src="script/gs/easing/EasePack.min.js" type="text/javascript"></script>
<script src="script/gs/TweenLite.min.js" type="text/javascript"></script>
<!--<script src="script/gs/plugins/ScrollToPlugin.min.js" type="text/javascript"></script>-->
<script src="script/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="script/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!--<script src="script/jcanvas.min.js" type="text/javascript"></script>-->
<script src="script/jquery.transit.min.js" type="text/javascript"></script>
<!--<script src="script/jquery.animate-colors-min.js" type="text/javascript"></script>-->
<script src="script/jquery.address-1.5.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
</head>
<body>
<div id="main">
     <div id="gradientOverlay"></div>
	 <div id="picOverlay">
	     <div id="closeBtn"></div>
		 <div class="arrow" id="arrowLeft"></div>
		 <div class="arrow" id="arrowRight"></div>
		 <img id="galleryMainImg" />
	 </div>
	<div id="stoerer"></div>
	<a href="http://www.facebook.com/arso-Reinigung-316315842037956/" target="_blank"><div id="fb_logo"></div></a>	
	<div id="wrapper">
	<div id="staubsauger"></div>
	<div id="logo"></div>
	</div>
	<div id="content">
	<?php 
		  for ($i = 0; $i<$dataCount; $i++){
					  ?>
					  <div class="contentWrapper" style="background-color:#000;color:#000">
					       <div class="contentTitel" style="color:#fff"><span><?php echo($data[$i]['Description']); ?></span></div>
						   <div class="contentTitelBlock" style="margin-top:1px;color:#000"></div>
						   <div class="contentTitelBlock" style="margin-top:2px;height:1px"></div>
						   <div class="contentInner contentInnerPink"><?php include $data[$i]['Content']; ?></div>
					  </div>
					<?php
		
		  }
		?>
		
		<div id="footer"><span>©2016 ARSO - UMZUGS - UND NEUBAUREINIGUNG</span></div>
	 </div>
	
</div>
<script type="text/javascript">	


var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};   

//alert(isMobile.any());


$.address.change(function(event) {  
    
	 
});  

var footer;
var picOverlay;
var closeBtn;
var galleryMainImg;
var arowLeft;
var arrowRight;
var main;

$(document).ready(function() {

  TweenLite.defaultOverwrite = "all";
  main = $('#main');
  footer = $('#footer');
  
  picOverlay = $('#picOverlay');
  closeBtn = $('#closeBtn');
  
  galleryMainImg = $('#galleryMainImg');
  arrowLeft = $('#arrowLeft');
  arrowRight = $('#arrowRight');
  
  closeBtn.click(function(){	
			
			closeGallery();
	    });
		
  arrowLeft.click(function(){	
			
			scrollLeft();
	    });
   arrowRight.click(function(){	
			
			scrollRight();
	    });
		
  $(".galleryImg").each(function(){	
			
			var gi = $(this);
		    var id = gi.attr('id');
			
		  gi.click(function(){
		       
			   openGallery(id);
		  });
	    });
  
  doResize();
  
  
  
});

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

var scrollTopBefore = 0;
function disableScroll() {
  /*if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;*/
  scrollTopBefore = $(window).scrollTop();
  console.log(scrollTopBefore);
  main.css("height", "100%");
  main.css("overflow", "hidden");
}

function enableScroll() {
   /* if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  */
	
	main.css("height", "auto");
  main.css("overflow", "none");
  
  $(window).scrollTop(scrollTopBefore);
}


$(window).bind('mousewheel', function(event) {
    

	
});




setInterval(function(){
	
	//picOverlay.css("top", $(window).scrollTop());
	
}, 33) 

var currentImgId = 0;
function openGallery(id){
	
	disableScroll();
	
	currentImgId = id;
	//console.log(imageData[id]);
	galleryMainImg.attr("src", "img/pictures/" + imageData[id].src + ".jpg");
	picOverlay.css("display", "block");
	
	doResize();
}

function scrollLeft(){
	
	currentImgId --;
	if(currentImgId < 0)currentImgId = maxPix-1;
	
	galleryMainImg.attr("src", "img/pictures/" + imageData[currentImgId].src + ".jpg");
	doResize();
}

function scrollRight(){
	
	currentImgId ++;
	if(currentImgId > maxPix-1)currentImgId = 0;
	
	galleryMainImg.attr("src", "img/pictures/" + imageData[currentImgId].src + ".jpg");
	doResize();
}

function closeGallery(){
	
	enableScroll();
	picOverlay.css("display", "none");
}
//////////////////////////////RESIZE
$.scrollbarWidth=function(){var a,b,c;if(c===undefined){a=$('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo('body');b=a.children();c=b.innerWidth()-b.height(99).innerWidth();a.remove()}return c};

var w = 0;
var h = 0;
var s = 1;
$(window).resize(function() {
 doResize();

});


function doResize(){

w = $(window).width();
h = $(window).height();


s = (w-150)/(imageData[currentImgId].width);

   if(imageData[currentImgId].height*s > (h-100)){
	   
	   s = (h-100)/(imageData[currentImgId].height);
   }
  /*
  if(h>1200){
	  footer.css("top", "auto");
	  footer.css("bottom", "0px");
	  
	  }else{
	  
	  footer.css("top", "1200px");
	  footer.css("bottom", "auto");
  }
    */
	
	
	/*galleryMainImg.css("margin-left",0);
	galleryMainImg.css("margin-top", 0);
	galleryMainImg.css("left", "50%");
	galleryMainImg.css("top", "50%");*/
	
	galleryMainImg.css("margin-left", -imageData[currentImgId].width/2);
	galleryMainImg.css("margin-top", -imageData[currentImgId].height/2);
	
	galleryMainImg.transition({scale:[s,s]},0);
	//TweenLite.to(galleryMainImg, 0, {scale:s});
}

function resizeContent(){}

///////////////////////////////CONTENT LOAD

function changeContent(path){

}

function loadContent(url){
	

	
}
function show(){

}
function hide(){

}
</script>
</body>
</html>

