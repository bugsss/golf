<div id="introCellWrapper">
    <div id="logInFormTopSpacer"></div>
    <form class="customForm" action="<?php echo url_for('@login') ?>" method="post" id="login_form">
        <fieldset>
            <input class="customInput" type="hidden" name="sf_method" value="put">
            <?php echo $form->renderGlobalErrors() ?>
            <?php echo $form->renderHiddenFields() ?>
            <div class="">
                <?php echo $form['email']->renderLabel('Email') ?>
                <?php if( isset( $errors ) && count( $errors ) > 0 ): ?>
                        <?php foreach( $errors as $field => $error) : ?>
                                <br /><span style="color: red;"><?php echo $error ?></span>
                        <?php endforeach; ?>
                <?php endif; ?>
                <div class=""><?php echo $form['email'] ?></div>
            </div>
            <div class="">
                <?php echo $form['password']->renderLabel('Password') ?>
                <div class=""><?php echo $form['password'] ?></div>
            </div>
            <div class="">
                <input type="button" value="Login" id="login_submit" class="customButton" /><br />
               	<input type="button" value="Register" id="registration_submit" class="customButton" /> <br />
               	<input type="button" value="Forgot?" id="forgot_submit" class="customButton" />
                <div class="fix"></div>
            </div>
        </fieldset>
    </form>        
</div><!--END introCellWrapper-->
<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
        $("#login_form").validationEngine();
        $(document).on( "click", "#login_submit", function(e){ 
            if( $("#login_form").validationEngine("validate") ) $("#login_form").submit();
        })
        $(document).on( "click", "#registration_submit", function(e){ window.location = "<?php echo url_for("@register"); ?>"; })
        $(document).on( "click", "#forgot_submit", function(e){ window.location = "<?php echo url_for("@forgot"); ?>"; })
    })
</script>