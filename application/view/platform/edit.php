<div class="content">
<div class="container">
    <h1>Edit Platform</h1>

    <div class="box">
        <h2>Edit a platform</h2>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <?php var_dump($this->platform); if ($this->platform) { ?>
            <form method="post" action="<?php echo Config::get('URL'); ?>platform/editSave">
                <label>Change platform: </label>
                <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
                <input type="hidden" name="id" value="<?php echo htmlentities($this->platform->id); ?>" />
                <input type="text" name="platform" value="<?php echo htmlentities($this->platform->platform); ?>" />
                <input type="submit" value='Change' />
            </form>
        <?php } else { ?>
            <p>This platform does not exist.</p>
        <?php } ?>
    </div>
</div>
</div>
