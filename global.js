// JavaScript Document
// learn jquery ajax 
// http://net.tutsplus.com/tutorials/javascript-ajax/5-ways-to-make-ajax-calls-with-jquery/

// no need to specify document ready
$(function worker(){
    // don't cache ajax or content won't be fresh
    $.ajaxSetup ({
        cache: false,
        complete: function() {
          // Schedule the next request when the current one's complete
          setTimeout(worker, 1000);
        }
    });
	var name = $('input#name').val();
    var ajax_load = $.post('proffquery.php', {name: name}, function(data){
			$('div#name-data').text(data);
		});
    // load() functions
    var loadUrl = "http://gonzodev.com/IDK/proff_view.php";
    
    $("#result").html(ajax_load).load(loadUrl);

// end  
});