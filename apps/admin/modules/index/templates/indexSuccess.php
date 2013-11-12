<?php use_helper('Date') ?>
<?php include_partial( 'index/left_menu', array( "isIndex" => true) ); ?>
<div id="index_tab">
    <!-- root element for the main scrollable -->
        <div id="main">
            <br clear="all" />
            <div style="margin: auto;">
                <table style="margin: auto;">
                    <tr>
                        <td style="width: 100%; vertical-align: middle;">
                            <div class="loginWrapper" style="float: left;">
                            <div class="loginLogo"><img src="../images/logo.png" alt="" /></div>
                            <div class="loginPanel">
                                <div class="head"><h5 class="iUser">Login</h5></div>
                                <form class="mainForm" action="<?php echo url_for('@homepage') ?>" method="post" id="<?php echo $sign_in_form->getName() ?>">
                                    <input type="hidden" id="login_ftype" name="login[ftype]" value="admin" />
                                    <fieldset>
                                        <input type="hidden" name="sf_method" value="put">
                                        <?php echo $sign_in_form->renderGlobalErrors() ?>
                                        <?php echo $sign_in_form->renderHiddenFields() ?>
                                        <div class="loginRow noborder" style="text-align:center; color:red;">
                                            <?php if( isset( $errors ) ) echo $errors ?>
                                            <div class="fix"></div>
                                        </div>
                                        <div class="loginRow noborder">
                                            <?php echo $sign_in_form['email']->renderLabel( "Username") ?>
                                            <?php echo $sign_in_form['email']->renderError() ?>
                                            <div class="loginInput"><?php echo $sign_in_form['email'] ?></div>
                                            <div class="fix"></div>
                                        </div>
                                        <div class="loginRow">
                                            <?php echo $sign_in_form['password']->renderLabel( 'Password') ?>
                                            <?php echo $sign_in_form['password']->renderError() ?>
                                            <div class="loginInput"><?php echo $sign_in_form['password'] ?></div>
                                            <div class="fix"></div>
                                        </div>
                                        <div class="loginRow" style="margin-bottom: -14px;">
                                            <input type="submit" value="<?php echo 'Sign in' ?>" id="sigin_submit" class="greyishBtn submitForm" style=""/>
                                            <div class="fix"></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sigin_submit").click(function(e){
            e.stopPropagation();
            e.preventDefault();
            
            if( $("#login").validationEngine("validate") ) $("#login").submit();
        })
        $("#login").validationEngine();
        
    });
</script>
