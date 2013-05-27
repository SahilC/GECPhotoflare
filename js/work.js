$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top*1.02
    }, 500,'easeOutQuad');
    return false;
});
