    <!-- Left navigation -->
    <div class="leftNav">
        <?php if ($sf_user->isAuthenticated()): ?>
            <ul id="menu">
        	<li class="dash"><a href="<?php echo url_for("@loggedin_homepage"); ?>" title="" class="<?php echo $module == "home" ? "active" :""; ?>"><span><?php echo __( 'Dashboard' ) ?></span></a></li>
        	<li class="contacts"><a href="<?php echo url_for("@users"); ?>" title="" class="<?php echo $module == "users" ? "active" :""; ?>"><span><?php echo __( 'Users' ) ?></span></a></li>
        	<li class="settings"><a href="<?php echo url_for("@services"); ?>" title="" class="<?php echo $module == "services" ? "active" :""; ?>"><span><?php echo __( 'Services' ) ?></span></a></li>
        	<li class="settings"><a href="<?php echo url_for("@units"); ?>" title="" class="<?php echo $module == "units" ? "active" :""; ?>"><span><?php echo __( 'Units' ) ?></span></a></li>
        	<li class="faq"><a href="<?php echo url_for("@faq"); ?>" title="" class="<?php echo $module == "faq" ? "active" :""; ?>"><span><?php echo __( 'FAQ' ) ?></span></a></li>
            </ul>
        <?php else: ?>
            <ul id="menu">
            </ul>
        <?php endif; ?>
    </div>
