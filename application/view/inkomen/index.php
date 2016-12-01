 <div class="content">
<div class="container">
    <h1>Add Game</h1>
    <div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>What happens here ?</h3>
        <p>
            All administrators can create, add and delete games here.       </p>
        <p>
            <form method="post" action="<?php echo Config::get('URL');?>inkomen/create">
                <label>New Game: </label><input type="text" name="inkomen" autocomplete="off" />
                <input type="submit" value='Add this game'/>
            </form>
        </p>

        <?php if ($this->inkomen) { ?>
            <table class="platform-table">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Game</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($this->inkomen as $key => $value) { ?>
                        <tr>
                            <td><?= $value->id; ?></td>
                            <td><?= htmlentities($value->game); ?></td>
                            <td><a href="<?= Config::get('URL') . 'inkomen/edit/' . $value->id; ?>">Edit</a></td>
                            <td><a href="<?= Config::get('URL') . 'inkomen/delete/' . $value->id; ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No games yet. Add some !</div>
            <?php } ?>
    </div>
</div>
</div>