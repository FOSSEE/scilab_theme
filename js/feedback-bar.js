$(document).ready(function() {
	//toggle hide/show popup box
    
	$(".min_max").click(function(e) {		
		$('.toggle_box').slideToggle();
        
		if($(".min_max").hasClass("min_btn")) {
			$(".min_max").removeClass("min_btn");
			$(".min_max").addClass("max_btn");
             
		} else {
			$(".min_max").removeClass("max_btn");
			$(".min_max").addClass("min_btn");
		}
		e.preventDefault();
		e.stopPropogation();
	});
 
    /******************
    COOKIE NOTICE
    ******************/    

    if(getCookie('show_cookie_message') != 'no')
    {
        $('#cookie_box').show();
    }
 
    $(".closee_btn").click(function()
    {
        $('#cookie_box').animate({opacity:0 }, "slow");
        setCookie('show_cookie_message','no');
        return false;
    });
});
 
function setCookie(cookie_name, value)
{
    document.cookie = cookie_name+ "=" + escape(value);
}
 
function getCookie(cookie_name)
{
    if (document.cookie.length>0)
    {
        cookie_start = document.cookie.indexOf(cookie_name + "=");
        if (cookie_start != -1)
        {
            cookie_start = cookie_start + cookie_name.length+1;
            cookie_end = document.cookie.indexOf(";",cookie_start);
            if (cookie_end == -1)
            {
                cookie_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(cookie_start,cookie_end));
        }
    }
    return "";   
}
