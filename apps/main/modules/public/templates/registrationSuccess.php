<div id="introCellWrapper">
    <div style="width:100%; height:50px;"></div>
<?php var_dump($errors); ?>    
    <form class="customForm" action="<?php echo url_for('@register')  ?>" method="post" id="register_form">
        <?php if( isset( $errors ) && count( $errors ) > 0 ): ?>
            <div id="errors_div">
                <?php foreach( $errors as $field => $error) : ?>
                        <span style="color: red; float: left"><?php echo ucwords( str_replace("_", " ", $field) ) . ": " . $error ?></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <fieldset>
            <input class="" type="hidden" name="sf_method" value="put">
            <?php echo $form->renderGlobalErrors() ?>
            <?php echo $form->renderHiddenFields() ?>
            <div class="regform_cell">
                <?php echo $form['first_name']->renderLabel('First name') ?>
                <?php //echo $form['first_name']->renderError() ?>
                <div class=""><?php echo $form['first_name'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['last_name']->renderLabel('Last name') ?>
                <?php //echo $form['last_name']->renderError() ?>
                <div class=""><?php echo $form['last_name'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['email']->renderLabel('Email') ?>
                <?php //echo $form['email']->renderError() ?>
                <div class=""><?php echo $form['email'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['gender']->renderLabel('Gender') ?>
                <?php //echo $form['gender']->renderError() ?>
                <div class=""><?php echo $form['gender'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['state']->renderLabel('State') ?>
                <?php //echo $form['state']->renderError() ?>
                <div class=""><?php echo $form['state'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['city']->renderLabel('City') ?>
                <?php //echo $form['city']->renderError() ?>
                <div class=""><?php echo $form['city'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['password']->renderLabel('Password') ?>
                <?php //echo $form['password']->renderError() ?>
                <div class=""><?php echo $form['password'] ?></div>
            </div>
            <div class="regform_cell">
                <?php echo $form['re_password']->renderLabel('Re - password') ?>
                <?php //echo $form['re_password']->renderError() ?>
                <div class=""><?php echo $form['re_password'] ?></div>
            </div>
            <div class="regform_cell">
                <input type="button" value="Register" id="registration_submit" class="customButton" /> <br />
                <div class="fix"></div>
            </div>
            <div class="regform_cell">
               	<input type="button" value="Have account" id="login_submit" class="customButton" /><br />
                <div class="fix"></div>
            </div>
        </fieldset>
    </form>        
</div><!--END introCellWrapper-->
<script type="text/javascript" language="JavaScript">
    $(document).ready(function(){
        $("#register_form").validationEngine();
        $(document).on( "click", "#registration_submit", function(e){ 
            if( $("#register_form").validationEngine("validate") ) $("#register_form").submit();
        })
        $(document).on( "click", "#login_submit", function(e){ window.location = "/login.html"; })
    })
</script>
