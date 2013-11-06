<div id="introCellWrapper">
<!--    <div id="loginColumn">-->
        <div id="loginCanvas">
            <div id="formColumn">
                <div id="container">
                    <form class="mainForm" action="<?php echo url_for('@login') ?>" method="post" id="login_form">
                        <fieldset>
                            <input type="hidden" name="sf_method" value="put">
                            <?php echo $form->renderGlobalErrors() ?>
                            <?php echo $form->renderHiddenFields() ?>
                            <div class="">
                                <?php echo $form['email']->renderLabel('Email') ?>
                                <?php echo $form['email']->renderError() ?>
                                <div class=""><?php echo $form['email'] ?></div>
                            </div>
                            <div class="">
                                <?php echo $form['password']->renderLabel('Password') ?>
                                <?php echo $form['password']->renderError() ?>
                                <div class=""><?php echo $form['password'] ?></div>
                            </div>
                            <div class="">
                                <input type="button" value="Login" id="login_submit" class="login_button" /><br />
                                <input type="button" value="Register" id="registration_submit" class="login_button" /> <br />
                                <input type="button" value="Forgot?" id="forgot_submit" class="login_button" />
                                <div class="fix"></div>
                            </div>
                        </fieldset>
                    </form>
                </div><!--End container-->
            </div><!--End FormColumn-->
        </div><!--End loginCanvas-->
<!--    </div>End loginColumn-->
</div>
<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
        $(document).on( "click", "#login_submit", function(e){ $("#login_form").submit(); })
        $(document).on( "click", "#registration_submit", function(e){ window.location = "/registration.html"; })
        $(document).on( "click", "#forgot_submit", function(e){ window.location = "/forgot.html"; })
    })
</script>