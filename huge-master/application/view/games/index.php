<div class="content">
<h1>Games</h1>
    <!-- echo out the system feedback (error and success messages) -->

        <h3>All the games conveniently listed for you.</h3>
        <div>
            Every game we have information about is listed here.
        </div>

        <div>
        <?php if ($this->games) { ?>
            <table class="overview-table">
                <?php foreach ($this->games as $key => $value) { ?>
                 
                        <tr> 
                            <td><img class="game_thumbnail" src="<?php echo $value->thumbnail; ?>"></td>
                            <td><?php echo $value->name; ?></td>
                            <td><a href="<?= Config::get('URL') . 'review/ShowGameInfo/' . $value->id; ?>">Review</a></td>
                        </tr>
                
                <?php 
                    }
                ?>      
            </table>
        <?php } else { ?>
            <div>No games yet. Add some!</div>
        <?php } ?>
        </div>
</div>