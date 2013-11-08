<div id="introCellWrapper">
    <div id="logInFormTopSpacer"></div>
    <form class="customForm" action="<?php echo url_for('@login') ?>" method="post" id="login_form">
        <?php if( isset( $errors ) && is_array( $errors ) ): ?>
            <div id="errors_div">
                <?php foreach( $errors as $field => $error) : ?>
                        <span style="color: red; float: left"><?php echo ucwords( str_replace("_", " ", $field) ) . ": " . $error ?></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <fieldset>
            <input class="customInput" type="hidden" name="sf_method" value="put">
            <?php echo $form->renderGlobalErrors() ?>
            <?php echo $form->renderHiddenFields() ?>
            <div class="">
                <?php echo $form['email']->renderLabel('Email') ?>
                <?php //echo $form['email']->renderError() ?>
                <div class=""><?php echo $form['email'] ?></div>
            </div>
            <div class="">
                <?php echo $form['password']->renderLabel('Password') ?>
                <?php //echo $form['password']->renderError() ?>
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
        $(document).on( "click", "#login_submit", function(e){ $("#login_form").submit(); })
        $(document).on( "click", "#registration_submit", function(e){ window.location = "/registration.html"; })
        $(document).on( "click", "#forgot_submit", function(e){ window.location = "/forgot.html"; })
    })
</script>