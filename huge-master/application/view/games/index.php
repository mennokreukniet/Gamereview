<div class="content">
<h1>Games</h1>
    <!-- echo out the system feedback (error and success messages) -->

        <h3>All the games conveniently listed for you.</h3>
        <div>
            Every game we have information about is listed here.
        </div>
        <div>
            <table class="overview-table">
                <thead>
                <tr>
                    <td>Game</td>
                </tr>
                </thead>
                <?php foreach ($this->games as $game) { ?>
                    <div class="game_block"
                       <td> <img class="game_thumbnail" src="<?= $game->thumbnail; ?>">
                        <?= $game->name; ?></td>
                    </div>
                    <?php 
                        }
                    ?>
            </table>
        </div>
</div>