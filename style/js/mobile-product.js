$(document).ready(function() {
    // Check width on page load
    if ( $(window).width() < 991) {
        $('.container-fluid').hide();
        jQuery('[id=section-mobile]').show();
        jQuery('[id=section-mobile]').addClass('section fp-section fp-table').css('height', '940px'); 
    } else {
        $('.container-fluid').show();
        jQuery('[id=section-mobile]').hide();
        jQuery('[id=section-mobile]').removeClass('section fp-section fp-table'); 
    }

    $(window).resize(function() {
        // if the browser resized, check with again
        if ( $(window).width() < 991) {
            $('.container-fluid').hide();
            jQuery('[id=section-mobile]').show();
            jQuery('[id=section-mobile]').addClass('section fp-section fp-table').css('height', '940px'); 
        } else {
            $('.container-fluid').show();
            jQuery('[id=section-mobile]').hide();
            jQuery('[id=section-mobile]').removeClass('section fp-section fp-table'); 
        }
    });

});

// setInterval(ajaxCall, 3000);

// function ajaxCall() {
//    $.ajax({url:url,
//            type:'html',
//            success:function(result){
//              if(result==0)
//                $('#content').hide();
//               else
//                 $('#content').html(result).show();  

//             }
//         });
//  }