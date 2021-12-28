/** * BOTTOM SLIDER MODAL START  ***/
$(".bottom-slider-modal-open-btn").click(function(){
    
    var bottom_slider_modal_id = $(this).attr("bottom_slider_modal_id");
    $(".bottom-slider-modal-background[id="+bottom_slider_modal_id+"]").fadeIn();
    $(".bottom-slider-modal[id="+bottom_slider_modal_id+"]").removeClass("slidedown")
    $(".bottom-slider-modal[id="+bottom_slider_modal_id+"]").addClass("slideup")
    // $(".bottom-slider-modal[id="+bottom_slider_modal_id+"]").show();
 
})

$(".bottom-slider-modal-background").click(function(){
    var bottom_slider_modal_id = $(this).attr("id");
    $(".bottom-slider-modal[id="+bottom_slider_modal_id+"]").removeClass("slideup")
    $(".bottom-slider-modal[id="+bottom_slider_modal_id+"]").addClass("slidedown")
    // $(".bottom-slider-modal[id="+bottom_slider_modal_id+"]").hide();
    $(".bottom-slider-modal-background[id="+bottom_slider_modal_id+"]").fadeOut();
})
/*** BOTTOM SLIDER MODAL END ** */