<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.png" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="thickBlackLine">
            <div id="header">
                <div id="logo"><img src="/images/logo.png" border="0" /></div>
                <div id="menu">
                    <div id="smoothmenu1" class="ddsmoothmenu">
                        <ul>
                            <li>
                                <a href="/" class="withBorder <?php echo $sf_user->getAttribute('selected_menu') == "" ? "selected_menu" : ""; ?>">home</a>
                            </li>
                            <li>
                                <a href="/press.html" class="withBorder <?php echo $sf_user->getAttribute('selected_menu') == "press" ? "selected_menu" : ""; ?>">press</a>
                            </li>
                            <li>
                                <a href="/products.html" class="withBorder <?php echo $sf_user->getAttribute('selected_menu') == "products" ? "selected_menu" : ""; ?>">products</a>
                            </li>
                            <li>
                                <a href="/support.html" class="withBorder <?php echo $sf_user->getAttribute('selected_menu') == "support" ? "selected_menu" : ""; ?>">support</a>
                                <ul style="top: 46px; visibility: visible; left: 0px; width: 171px; display: none;">
                                    <li><a href="/support/how_to.html">HOW TO</a></li>
                                    <li><a href="/support/contact_us.html">CONTACT US</a></li>
                                </ul>
                            </li>
                            <?php if( !$sf_user->isAuthenticated() ): ?>
                                <li>
                                    <a href="<?php echo url_for("@login") ?>" class="withoutBorder <?php echo $sf_user->getAttribute('selected_menu') == "login" ? "selected_menu" : ""; ?>">log in</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?php echo url_for("@members") ?>" class="withoutBorder <?php echo $sf_user->getAttribute('selected_menu') == "members" ? "selected_menu" : ""; ?>">Members Area</a>
                                </li>
                                <li>
                                    <a href="<?php echo url_for("@logout") ?>" class="withoutBorder <?php echo $sf_user->getAttribute('selected_menu') == "login" ? "selected_menu" : ""; ?>">log out</a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="/about.html" class="withBorder <?php echo $sf_user->getAttribute('selected_menu') == "about" ? "selected_menu" : ""; ?>">about</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="greenBackground">
            <?php echo $sf_content ?>
        </div>
        <div id="thinkBlackLine">
            <div id="footerWrapper">
                <div id="footer">
                    golf gameskeeper, llc &copy; 2013 <a href="/PrivacyPolicy.htm" target="_blank">privacy policy</a>
                </div>
                <div id="social" style="float: right; margin-top: -35px;">
                    <ul>
                        <li><a href="https://www.facebook.com/golfgameskeeper" target="_blank"><img src="/images/facebook.png" border="0" /></a></li>
                        <li><a href="https://twitter.com/golfgameskeeper" target="_blank"><img src="/images/twitter.png" border="0" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript" language="JavaScript">
            $(document).ready(function(){
                $("#smoothmenu1 ul li ul").hide();
            })
        </script>        
    </body>
</html>
