<div class="container">
		<h1><?php  ?></h1>
		<div class="box">

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        </div>
        <h3><?php
           foreach ($this->games as $key => $value) {
            echo $value; } ?></h3>
        </div>
        <div>
            <table class="overview-table">
        </div>
	</div>
</div>

 
