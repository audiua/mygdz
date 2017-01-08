<h1><?= $this->h1; ?></h1>

<?php $this->widget('DataBookWidget', array('model'=>$books)); ?>
<div class="description">
	<?= $this->clasModel->description; ?>
</div>
<div class="separator"></div>
<div class="separator"></div>
<div class="clearfix"></div>

