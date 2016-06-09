<div class="container">
		<h1>Games</h1>
		<div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

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
                <?php foreach ($this->$games as $game) { ?>
                		<td><?= $games['id']; ?></td>
                    	<td><?= $games['name']; ?></td>
                	<?php 
                		}
                	?>
            </table>
        </div>
	</div>
</div>
 
