<?php use_helper('Date') ?>
<?php include_partial( 'index/left_menu', array( "module" => "blog" ) ); ?>
    <div class="content">
    	<div class="title"><h5>Press articles</h5></div>

        <?php $display_form = "closed"; ?>
        <?php if( isset( $errors ) ):?>
            <?php if( $errors == "" ): ?>
                <div class="nNote nSuccess hideit">
                    <p><strong>SUCCESS: </strong>Article <?php echo $valori_form["title"] ?> saved with success.</p>
                </div>
            <?php else: ?>
                <div class="nNote nFailure hideit">
                    <p><strong>FAILURE: </strong><?php echo nl2br($errors); ?></p>
                </div>
                <?php $display_form = "open"; ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="widget acc">
            <div class="head <?php echo $display_form; ?>" id="add_article_div"><h5>Add new article</h5></div>
            <div class="body">
                <div id="output"></div>
                <form class="mainForm" action="<?php echo url_for( '@blog' )?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> id="article_form">
                    <fieldset>
                        <input type="hidden" name="sf_method" value="put" />
                        <input type="hidden" name="blog[bid]" value="put" id="bid"/>
                        <?php echo $form->renderGlobalErrors() ?>
                        <?php echo $form->renderHiddenFields() ?>
                        <div class="rowElem  noborder">
                            <label><?php echo $form['title']->renderLabel( 'Title' ) ?></label>
                            <div class="formRight">
                                    <?php echo $form['title']->renderError() ?>
                                    <?php echo $form['title'] ?>
                            </div>
                            <div class="fix"></div>
                        </div>
                        <div class="rowElem  noborder">
                            <label><?php echo $form['content']->renderLabel( "Content" ) ?></label>
                            <div class="formRight">
                                <div class="widget" style="background-color: white; border-style: solid; border-color: #DFDFDF; ">
                                    <?php echo $form['content']->renderError() ?>
                                    <?php echo $form['content'] ?>
                                </div>
                            </div>
                            <div class="fix"></div>
                        </div>

                        <div class="rowElem  noborder">
                            <label><?php echo $form['publish_date']->renderLabel( "Publish date" ) ?></label>
                            <div class="formRight">
                                    <?php echo $form['publish_date']->renderError() ?>
                                    <?php echo $form['publish_date'] ?>
                            </div>
                            <div class="fix"></div>
                        </div>
                        <div class="rowElem  noborder">
                            <?php echo $form->renderHiddenFields(false) ?>
                            <input type="submit" value="Add" id="submit_button"  class="greyishBtn submitForm"  style="padding-bottom: 4px;" />
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        
        
        <div class="widget first">
            <div class="head"><h5 class="iList">Article list</h5></div>
            <div style="padding: 10px;">
                <div class="widget acc">
                    <?php foreach( $articles as $article): ?>
                        <div id="al_<?php echo $article->getId(); ?>">
                            <?php $style = ( $article->getActive() == 0 ? "text-decoration: line-through;" : "" ) ?>
                            <div class="head">
                                <h5 class="art_title" id="at_<?php echo $article->getId(); ?>" style="<?php echo $style; ?>"><?php echo $article->getTitle(); ?></h5>
                                <span style="float:right; margin-right: 15px; margin-top: 10px; <?php echo $style; ?>" class="art_pd" id="pd_<?php echo $article->getId(); ?>"><?php echo date( "Y-m-d", strtotime( $article->getPublishDate() ) ); ?></span>
                                <span style="float:right; margin-right: 15px; margin-top: 3px; <?php echo $style; ?>" class="art_pt" id="pt_<?php echo $article->getId(); ?>"><img src="/images/twitter.png" border="0" style="width: 33px;"/></span>
                                <span style="float:right; margin-top: 3px; <?php echo $style; ?>" class="art_pf" id="pf_<?php echo $article->getId(); ?>"><img src="/images/facebook.png" border="0" style="width: 33px;"/></span>
                            </div>
                            <div class="menu_body">
                                <span><?php echo html_entity_decode( $article->getContent() ); ?></span>
                                <div class="rowElem noborder">
                                    <br />
                                    <input type="button" class="greenBtn modify_button" id="btmod_<?php echo $article->getId(); ?>" value="Modify">
                                    <input type="button" class="greenBtn activate_button" id="btact_<?php echo $article->getId(); ?>" value="<?php echo $article->getActive() == 1 ? "De-activate" : "Activate" ?>">
                                    <input type="button" class="redBtn delete_button" id="btdel_<?php echo $article->getId(); ?>" value="Delete">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".art_pf").click( function(e){
              alert("facebook post")
        });
        
        $(".art_pt").click( function(e){
              alert("twitter tweet")
        });
        
        $(".modify_button").click( function(e){
           e.stopPropagation();
           e.preventDefault();
           var id = $(this).attr("id").split("_")[1];
           $.post(
                    "<?php echo url_for("@get_article"); ?>",
                    { id : id },
                    function(data){
                        if(data.success == "true"){
                            $("#bid").val( id );
                            $("#blog_title").val( data.article.title );
                            $('#blog_content').wysiwyg("setContent", data.article.content );
                            $("#blog_publish_date").val( data.article.publish_date.split(" ")[0] );
                            $("#submit_button").val("Save");
                            $("#add_article_div").trigger("click");
                        }
                    },
                    "json"
            )
        });
        
        $(".activate_button").click( function(e){
           e.stopPropagation();
           e.preventDefault();
           var id = $(this).attr("id").split("_")[1];
           $.post(
                    "<?php echo url_for("@set_activate"); ?>",
                    { id : id },
                    function(data){
                        if(data.success == "true"){
                            if(data.isActive == "false"){
                                decor = "line-through";
                                button = "Activate";
                            } else {
                                decor = "none"
                                button = "De-activate";
                            }
                            $("#at_" + id ).css( "text-decoration", decor );
                            $("#pd_" + id ).css( "text-decoration", decor );
                            $("#btact_" + id ).val( button );
                        }
                    },
                    "json"
            )
        });
        
        $(".delete_button").click( function(e){
           e.stopPropagation();
           e.preventDefault();
           var id = $(this).attr("id").split("_")[1];
           jConfirm('Confirm delet of article:<br><b>' + $("#at_" + id ).text() + '</b>?', 'Confirmation Dialog', function(r) {
                $.post(
                            "<?php echo url_for("@delete_article"); ?>",
                            { id : id },
                            function(data){
                                if(data.success == "true"){
                                    $("#al_" + id ).remove();
                                }
                            },
                            "json"
                    )
           });
        });
    });
</script>