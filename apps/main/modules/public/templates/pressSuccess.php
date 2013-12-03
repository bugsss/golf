<div id="introCellWrapper">
    <div id="spacer1"></div>
    <div id="spacer2"></div>

    <div id="pressScroll" style="height: 508px;">
        <div id="container">
            <table styel="width: 100%">
                <?php foreach( $articles as $article ): ?>
                    <tr>
                        <td style="width: 80%"><h1 class="article_title"><?php echo $article->getTitle(); ?></h1></td>
                        <td><span class="article_date" style="float: right"><?php echo date( "Y-m-d", strtotime( $article->getPublishDate() ) ); ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="width: 100%"><span class="article_content"><?php echo html_entity_decode( $article->getContent() ); ?></span></td>
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
