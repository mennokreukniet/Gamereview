<div class="content">
<div class="container">
    <h1>Add Platform</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>What happens here ?</h3>
        <p>
            All administrators can create, add and delete platforms here.        </p>
        <p>
            <form method="post" action="<?php echo Config::get('URL');?>platform/create">
                <label>New Platform: </label><input type="text" name="platform" />
                <input type="submit" value='Add this platform' autocomplete="off" />
            </form>
        </p>

        <?php if ($this->platform) { ?>
            <table class="platform-table">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Platform</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($this->platform as $key => $value) { ?>
                        <tr>
                            <td><?= $value->id; ?></td>
                            <td><?= htmlentities($value->platform); ?></td>
                            <td><a href="<?= Config::get('URL') . 'platform/edit/' . $value->id; ?>">Edit</a></td>
                            <td><a href="<?= Config::get('URL') . 'platform/delete/' . $value->id; ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No platforms yet. Add some !</div>
            <?php } ?>
    </div>
</div>
</div>