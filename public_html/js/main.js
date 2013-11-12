/**
 * @author .DeV!L
 */
$(function(){
	$("img").error(function(){
		$(this).hide();
	});

	$("#menu_pages").click(function(e){
		e.preventDefault();
		$("#menu_sub").slideToggle();
		return false;
	});
	$("#menu_pages2").click(function(e){
		e.preventDefault();
		$("#menu_sub2").slideToggle();
		return false;
	});
	$("#menu_pages3").click(function(e){
		e.preventDefault();
		$("#menu_sub3").slideToggle();
		return false;
	});
	$("#menu_pages4").click(function(e){
		e.preventDefault();
		$("#menu_sub4").slideToggle();
		return false;
	});
	$("#menu_pages5").click(function(e){
		e.preventDefault();
		$("#menu_sub5").slideToggle();
		return false;
	});
	$("#menu_pages6").click(function(e){
		e.preventDefault();
		$("#menu_sub6").slideToggle();
		return false;
	});
    
	/* +slideUp/slideDown segments */
	$("h2.header").click(function(){
		var b = $(this).next();
		if (b.css('display') == 'block') {
			hideSeg(b);
		}
		else {
			showSeg(b);
		}
	}).prepend('<a href="javascript:void(0);" class="roll">roll</a>');
	
	$(".roll").click(function(){
		var b = $(this).parent().next();
		if (b.css('display') == 'block') {
			hideSeg(b);
		} else {
			showSeg(b);
		}
		return false;
	});
/* -slideUp/slideDown segments */	
});

function hideSeg(el){
	el.hide();
	el.prev().children().eq(0).css('backgroundImage', 'url(images/roll+.png)');
	setVal(el.prev().attr('id'), 'false');
}

function showSeg(el){
	el.show();
	el.prev().children().eq(0).css('backgroundImage', 'url(images/roll-.png)');
	setVal(el.prev().attr('id'), 'true');
}

function setSeg(id)
{
	var el = $("#"+id).next();
	if (getVal(id) == 'false'){
		hideSeg(el);
	}else{
		showSeg(el);
	}
}

function getVal(name){
	var results = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    
	if (results)
		return (unescape(results[2]));
	else
		return null;
}

function setVal(name, value){
	var cookie_string = name + "=" + escape(value);
    
	var current_date = new Date;
	var cookie_year = current_date.getFullYear() + 1;
	var cookie_month = current_date.getMonth();
	var cookie_day = current_date.getDate();
    
	var expires = new Date(cookie_year, cookie_month, cookie_day);
	cookie_string += "; expires=" + expires.toGMTString();
    
	document.cookie = cookie_string;
}
