<div id="introCellWrapper">
    <div id="logInFormTopSpacer"></div>
    <form class="customForm" action="<?php echo url_for('@contact_us') ?>" method="post" id="contactus_form">
        <?php if( is_array( $errors ) ): ?>
            <div id="errors_div" >
                <?php foreach( $errors as $field => $error) : ?>
                        <span style="color: red; float: left"><?php echo ucwords( str_replace("_", " ", $field) ) . ": " . $error ?></span>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
<!--            <span style="color: green;">Your message was sent to us.</span>-->
            <span style="color: green;"><?php echo isset( $errors ) ? $errors : "" ?></span>
        <?php endif; ?>
        <fieldset>
            <input class="customInput" type="hidden" name="sf_method" value="put">
            <?php echo $form->renderGlobalErrors() ?>
            <?php echo $form->renderHiddenFields() ?>
            <div class="">
                <?php echo $form['email']->renderLabel() ?>
                <?php //echo $form['email']->renderError() ?>
                <div class=""><?php echo $form['email'] ?></div>
            </div>
            <div class="">
                <?php echo $form['name']->renderLabel() ?>
                <?php //echo $form['email']->renderError() ?>
                <div class=""><?php echo $form['name'] ?></div>
            </div>
            <div class="">
                <?php echo $form['message']->renderLabel() ?>
                <?php //echo $form['password']->renderError() ?>
                <div class=""><?php echo $form['message'] ?></div>
            </div>
            <div class="">
                <input type="submit" value="Send" id="contactus_submit" class="customButton" /><br />
                <div class="fix"></div>
            </div>
        </fieldset>
    </form>        
</div><!--END introCellWrapper-->
<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
    })
</script>