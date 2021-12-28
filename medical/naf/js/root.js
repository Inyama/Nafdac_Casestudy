window.onscroll = function() {
  
    if (window.pageYOffset >= 70) {
     $(".site-header").addClass("sticky-top")
     $(".site-header").addClass("is-showing")
     //alert("class added")
    }else{
        $(".site-header").removeClass("sticky-top")
     $(".site-header").removeClass("is-showing")
    }
  }

  /*** SIDEBAR SCRIPT START *** */
var sidebar_is_open = false;
$(".sidebar-open-btn").click(function(){
 
  if(!sidebar_is_open){
    $(".sidebar-transparent-background").fadeIn();
      $(".sidebar").fadeIn();
      sidebar_is_open = true;
  }else{
    $(".sidebar-transparent-background").fadeOut();
    $(".sidebar").fadeOut();
    sidebar_is_open = false;
  }
})
$(".sidebar-transparent-background").click(function(){
  $(".sidebar-transparent-background").fadeOut();
  $(".sidebar").fadeOut();
  sidebar_is_open = false;
})

  /*** SIDEBAR SCRIPT END*** */

  $(".loading-btn").click(function(){
    $(this).html("<img src='assets/images/loader1.gif' class='' style='width:25px;height:25px'>")
    $(this).attr("disabled", "true")
  })