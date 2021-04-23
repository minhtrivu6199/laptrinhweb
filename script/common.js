
// $(document).ready(function(){

//     function openNav() {
//     document.getElementById("mySidenav").style.width = "70%";
    
//     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
//     }
    
//     function closeNav() {
//     document.getElementById("mySidenav").style.width = "0";
//     document.body.style.backgroundColor = "rgba(0,0,0,0)";
//     }
    
    
//     });

$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
   
   // breakpoint and up  
   $(window).resize(function(){
     if ($(window).width() >= 980){  
   
         // when you hover a toggle show its dropdown menu
         $(".navbar .dropdown-toggle").hover(function () {
            $(this).parent().toggleClass("show");
            $(this).parent().find(".dropdown-menu").toggleClass("show"); 
          });
   
           // hide the menu when the mouse leaves the dropdown
         $( ".navbar .dropdown-menu" ).mouseleave(function() {
           $(this).removeClass("show");  
         });
     
       // do something here
     } 
   });  
     
     
   
   // document ready  
   });