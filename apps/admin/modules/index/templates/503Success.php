<!-- Error info area -->
<div class="wrapper">
    <div class="errorPage">
        <h2 class="red errorTitle"><span><?php echo __( 'Something went wrong here' ) ?></span></h2>
        <h1>503</h1>
        <span class="bubbles"></span>
        <p><?php echo __( 'Oops! Sorry, an error has occured. Service Unavailable!' ) ?></p>
        <div class="backToDash"><a href="<?php echo url_for("@dashboard"); ?>" title="" class="seaBtn button"><?php echo __( 'Back to Dashboard' ) ?></a></div>
    </div>
</div>
