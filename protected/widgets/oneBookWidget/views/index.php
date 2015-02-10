<?php 
// d();
$path = 'images/gdz/'.$this->params['clas'].'/'.$this->params['subject'].'/'.$this->model->slug.'/book';?>

<div class="big-book">
	<?php echo CHtml::image(Yii::app()->baseUrl . '/' . $path.'/'.$this->model->img, 'ГДЗ' . $this->model->clas->slug .' клас '. $this->model->title . ' ' . $this->model->author, 
		array('class'=>'')); 
	?> 



	<div><small>автор: </small><?php echo $this->model->author; ?></div>
	<div><small>предмет: </small>
	<?php 
		$subj = $this->model->title;
		$subj .= $this->model->properties ? ' ' . $this->model->properties : '' ;
		echo  $subj;
	?></div>
	<div><small>клас: </small><?php echo $this->model->clas->slug; ?> клас</div>

	<?php if($this->model->year): ?>
	<div><small>рік: </small><?php echo $this->model->year; ?></div>
	<?php endif; ?>

	<?php if($this->model->edition): ?>
	<div><small>видавництво: </small><?php echo $this->model->edition; ?></div>
	<?php endif; ?>

	<?php if($this->model->info): ?>
	<div><small>особливысть: </small><?php echo $this->model->info; ?></div>
	<?php endif; ?>

	<?php if($this->model->description): ?>
	<div class="margin"><?php echo $this->model->description; ?></div>
	<?php endif; ?>



</div>

