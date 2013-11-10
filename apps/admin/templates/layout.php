<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <?php if ($sf_user->isAuthenticated() && $sf_user->hasCredential('admin') ): ?>
                <div id="topNav">
                    <div class="fixed">
                        <div class="wrapper">
                            <div class="welcome"></div>
                            <div class="userNav">
                                <ul>
                                    <li><a href="<?php echo url_for("@signout"); ?>" title=""><img src="../images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                                </ul>
                            </div>
                            <div class="fix"></div>
                        </div>
                    </div>
                </div>

                <!-- Header -->
                <div id="header" class="wrapper">
                    <div class="logo"><a href="/" title=""><img src="../images/logo.png" alt="" /></a></div>
                    <div class="middleNav">
                    </div>
                    <div class="fix"></div>
                </div>
        <?php else: ?>
                <div id="topNav">
                    <div class="fixed">
                        <div class="wrapper">
                            <div class="userNav">
                                <ul>
                                     <li><a href="<?php echo url_for("@signin"); ?>" title=""><img src="../images/icons/topnav/login.png" alt="" /><span>Login</span></a></li>
                                </ul>
                            </div>
                            <div class="fix"></div>
                        </div>
                    </div>
                </div>
        <?php endif; ?>

        <!-- Content wrapper -->
        <div class="wrapper">
            <?php echo $sf_content ?>
        </div>
        
        <!-- Footer -->
        <div id="footer">
                <div class="wrapper">
                <span></span>
            </div>
        </div>
        
        
    </body>
</html>
