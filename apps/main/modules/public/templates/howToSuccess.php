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
            <table align="center" cellspacing"7">
                <tr>
                    <td><img src="/images/instructions/support_1.JPG" border="0" width="358" height="500" /></td>
                    <td><img src="/images/instructions/support_2.JPG" border="0" width="358" height="500" /></td>
                </tr>
                <tr>
                    <td><img src="/images/instructions/support_3.JPG" border="0" width="358" height="500" /></td>
                    <td><img src="/images/instructions/support_4.JPG" border="0" width="358" height="500" /></td>
                </tr>
                <tr>
                    <td><img src="/images/instructions/support_5.JPG" border="0" width="358" height="500" /></td>
                    <td></td>
                </tr>
            </table>
    	</div>
    </div>
