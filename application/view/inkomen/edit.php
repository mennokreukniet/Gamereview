<div class="content">
<div class="container">
    <h1>Edit Game</h1>

    <div class="box">
        <h2>edit an existing game</h2>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <?php if ($this->inkomen) { ?>
            <form method="post" action="<?php echo Config::get('URL'); ?>inkomen/editSave">
                <label>Change game: </label>
                <!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
                <input type="hidden" name="id" value="<?php echo htmlentities($this->inkomen->id); ?>" />
                <input type="text" name="inkomen" autocomplete="off" value="<?php echo htmlentities($this->inkomen->game); ?>" />
                <input type="submit" value='Change' />
            </form>
        <?php } else { ?>
            <p>This game does not exist.</p>
        <?php } ?>
    </div>
</div>
</div>
