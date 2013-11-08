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
                                <div class="head"><h5 class="iUser"><?php echo __('Login'); ?></h5></div>
                                <form class="mainForm" action="<?php echo url_for('@signin') ?>" method="post" id="registration_form_signin">
                                    <fieldset>
                                        <input type="hidden" name="sf_method" value="put">
                                        <?php echo $sign_in_form->renderGlobalErrors() ?>
                                        <?php echo $sign_in_form->renderHiddenFields() ?>
                                        <div class="loginRow noborder">
                                            <?php echo $sign_in_form['username']->renderLabel( __('Username') ) ?>
                                            <?php echo $sign_in_form['username']->renderError() ?>
                                            <div class="loginInput"><?php echo $sign_in_form['username'] ?></div>
                                            <div class="fix"></div>
                                        </div>
                                        <div class="loginRow">
                                            <?php echo $sign_in_form['password']->renderLabel( __('Password')) ?>
                                            <?php echo $sign_in_form['password']->renderError() ?>
                                            <div class="loginInput"><?php echo $sign_in_form['password'] ?></div>
                                            <div class="fix"></div>
                                        </div>
                                        <div class="loginRow" style="margin-bottom: -14px;">
                                            <div class="rememberMe">
                                                    <?php echo $sign_in_form['remember'] ?>
                                                    <?php echo $sign_in_form['remember']->renderLabel( __('Remember me') ) ?>
                                            </div>
                                            <input type="submit" value="<?php echo __('Sign in') ?>" id="sigin_submit" class="greyishBtn submitForm" style="margin-top: -20px; padding-bottom: 4px;"/>
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