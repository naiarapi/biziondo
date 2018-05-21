// JavaScript Document

$(document).ready(function(e) {
	
ver=0	
  
$("#solapita").click(function(){
  if(ver==0){
	  $("#menu").animate({left:"0px"},500);
	  $("#solapita").animate({left:"200px"},500);	 
	  $("#contenedor").animate({left:"200px"},500);	
	   
	  $('.c-hamburger').addClass('is-active');
	  ver=1;
  }else{
	  $("#menu").animate({left:"-200px"},500);
	  $("#solapita").animate({left:"0px"},500);
	   $("#contenedor").animate({left:"0px"},500);
	   
	  $('.c-hamburger').removeClass('is-active');
	  ver=0;
  }

});
 
$("ul li ul").hide(); // ocultar todas las sublistas // ul li ul es igual que poner li ul
	
		
$(".con").click(function(){
		$(this).children("ul").slideToggle(); //desplegar ul hijo
		$(this).siblings().children("ul").slideUp();
	}); 
	 
	 ver=0	
$("li ul li").click(function(){
		  $("#menu").animate({left:"-200px"},500);
		  $("#solapita").animate({left:"0px"},500);
		  $("#contenedor").animate({left:"0px"},500);
		  
		   if(ver==0){
	  				 $('.c-hamburger').addClass('is-active');
	 	  ver=1;
 		  }else{
		  			$('.c-hamburger').removeClass('is-active');
	  		ver=0;
  }
	 
	});

ver=0
 $(".seg").click(function(){
	  $("#menu").animate({left:"-200px"},500);
	  $("#solapita").animate({left:"0px"},500);
	  $("#contenedor").animate({left:"0px"},500);
	  
	   if(ver==0){
	  				 $('.c-hamburger').addClass('is-active');
	 	  ver=1;
 		  }else{
		  			$('.c-hamburger').removeClass('is-active');
	  		ver=0;
  }
});

});

