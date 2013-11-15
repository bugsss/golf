<div id="introCellWrapper">
    <div id="logInFormTopSpacer"></div>
    <form class="customForm" action="<?php echo url_for('@forgot') ?>" method="post" id="forgot_form">
        <fieldset>
            <input class="customInput" type="hidden" name="sf_method" value="put">
            <?php echo $form->renderGlobalErrors() ?>
            <?php echo $form->renderHiddenFields() ?>
            <div class="">
                <?php echo $form['email']->renderLabel('Email') ?>
                <?php if( isset( $f_errors ) ): ?>
                    <?php if( count( $f_errors ) > 0 ): ?>
                        <?php foreach( $f_errors as $field => $error) : ?>
                                <br /><span style="color: red;"><?php echo $error ?></span>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span style="color: green;">Password sent to:.</span>
                    <?php endif; ?>
                <?php endif; ?>
                <div class=""><?php echo $form['email'] ?></div>
            </div>
            <div class="">
                <input type="submit" value="Send password" id="forgot_submit" class="customButton" />
                <div class="fix"></div>
            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
    })
</script>