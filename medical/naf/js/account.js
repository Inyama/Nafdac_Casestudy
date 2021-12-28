window.onscroll = function() {
  
    if (window.pageYOffset >= 70) {
     $(".desktop-nav-section").addClass("sticky-top")
     $(".desktop-nav-section").addClass("is-showing")
    
    }else{
        $(".desktop-nav-section").removeClass("sticky-top")
     $(".desktop-nav-section").removeClass("is-showing")
    }
  }



  $(".loading-btn").click(function(){
    $(this).html("<img src='../assets/images/loader1.gif' class='' style='width:25px;height:25px'>")
    $(this).attr("disabled", "true")
  })