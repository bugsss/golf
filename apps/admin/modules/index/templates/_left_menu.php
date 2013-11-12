    <!-- Left navigation -->
    <div class="leftNav">
        <?php if ($sf_user->isAuthenticated()): ?>
            <ul id="menu">
        	<li class="dash"><a href="<?php echo url_for("@loggedin_homepage"); ?>" title="" class="<?php echo $module == "home" ? "active" :""; ?>"><span>Dashboard</span></a></li>
        	<li class="contacts"><a href="<?php echo url_for("@blog"); ?>" title="" class="<?php echo $module == "blog" ? "active" :""; ?>"><span>Press</span></a></li>
            </ul>
        <?php endif; ?>
    </div>
