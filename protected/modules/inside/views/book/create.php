<?php
/* @var $this GdzBookController */
/* @var $model GdzBook */

$this->breadcrumbs=array(
	'Gdz Books'=>array('index'),
	'Create',
);

?>

<h1>Create GdzBook</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>