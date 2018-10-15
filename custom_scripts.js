jQuery(document).ready(function($){


    $( ".trigger-30" ).click(function(e) {
        e.preventDefault();
            $(".toggle").not(".thirty-minute").slideUp();
            $( ".thirty-minute" ).slideToggle( "slow", function() {
    	});
     });
     
    $( ".trigger-45" ).click(function(e) {
        e.preventDefault();
            $(".toggle").not(".forty-five-minute").slideUp();
            $( ".forty-five-minute" ).slideToggle( "slow", function() {
    	});
    });
    
    $( ".trigger-60" ).click(function(e) {
        e.preventDefault();
            $(".toggle").not(".sixty-minute").slideUp();
            $( ".sixty-minute" ).slideToggle( "slow", function() {
    	});
     });

    $( ".trigger-Hancock" ).click(function(e) {
        e.preventDefault();
            $(".toggle").not(".Hancock-Materials").slideUp();
            $( ".Hancock-Materials" ).slideToggle( "slow", function() {
    	});
    });

});