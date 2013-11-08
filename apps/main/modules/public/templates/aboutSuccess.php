	<script>
  		$(document).ready(function() {
  		//    $("html").niceScroll();  // The document page (html)
    
    	$("#boxScroll").niceScroll({touchbehavior:false,cursorcolor:"#96B613",cursoropacitymax:0.7,cursorwidth:7,cursorborder:"1px solid #000",
		cursorborderradius:"3px",background:"#6B820C",autohidemode:"false"}).cursor.css({"background-image":"url(img/mac6scroll.png)"}); // MAC like scrollbar

    	$("#boxscroll2").niceScroll({touchbehavior:false,cursorcolor:"#00F",cursoropacitymax:0.7,cursorwidth:6,background:"#ccc",autohidemode:false});
	
  		});
	</script>

    <div id="introCellWrapper">
    	<div id="boxScroll">
        	<img src="/images/aboutUs.jpg" border="0" />
        </div>
    </div>
