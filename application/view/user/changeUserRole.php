<div class="content">
<div class="container">
    <h1>UserController/changeUserRole</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="box">
        <h2>Change account type</h2>
        <p>
            Upgrade your account here.
        </p>
	    <p>
		    Please note: some options are only available to admins.
	    </p>

        <h2>Currently your account type is: <?php echo Session::get('user_account_type'); ?></h2>
        <!-- basic implementation for two account types: type 1 and type 2 -->
	    <form action="<?php echo Config::get('URL'); ?>user/changeUserRole_action" method="post">
            <?php if (Session::get('user_account_type') == 1) { ?>
                <input type="submit" name="user_account_upgrade" value="Upgrade my account (to Premium User)" />
	        <?php } else if (Session::get('user_account_type') == 2) { ?>
	            <input type="submit" name="user_account_downgrade" value="Downgrade my account (to Basic User)" />
	        <?php } ?>
	    </form>
    </div>
</div>
</div>