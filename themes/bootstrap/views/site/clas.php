<h1><?= $this->h1; ?></h1>

<div class="description">
	<?= $this->clasModel->description; ?>
</div>

<div class="clear"></div>

<div class="all-book">
	<?php $this->widget('DataBookWidget', array('model'=>$books)); ?>
</div>