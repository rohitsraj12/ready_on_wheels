$(document).ready(function(){

    $(".nav-link").click(function(){
        $(this).parent().find(".sub__nav").slideToggle();
    })
    
})