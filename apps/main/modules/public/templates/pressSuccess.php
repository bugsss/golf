<div id="introCellWrapper">
    <div id="spacer1"></div>
    <div id="spacer2"></div>

    <div id="pressScroll" style="height: 508px;">
        <div id="container">
            <table styel="width: 100%">
                <?php foreach( $articles as $article ): ?>
                    <tr>
                        <td style="width: 80%"><?php echo $article->getTitle(); ?></td>
                        <td style="width: 20%; float: right"><?php echo date( "Y-m-d", strtotime( $article->getPublishDate() ) ); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 100%"><?php echo html_entity_decode( $article->getContent() ); ?></td>
                    </tr>
                    <tr><td colspan="2" style="height: 15px;"> </td></tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" language="JavaScript">
    $(document).ready(function() {
        $("#pressScroll").niceScroll({
		touchbehavior:false,
		cursorcolor:"#96B613",
		cursoropacitymax:0.7,
		cursorwidth:7,
		cursorborder:"1px solid #000",
            	cursorborderradius:"3px",
		background:"#6B820C",
		autohidemode:"false"}); // MAC like scrollbar
    });
</script>
