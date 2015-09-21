<?php 
// d();
$path = 'images/gdz/'.$this->params['clas'].'/'.$this->params['subject'].'/'.$this->model->slug.'/book';?>

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 book">
		
		<?php echo CHtml::image(Yii::app()->baseUrl . '/' . $path.'/'.$this->model->img, 'ГДЗ' . $this->model->clas->slug .' клас '. $this->model->title . ' ' . $this->model->author, 
			array('class'=>'')); 
		?> 
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 book-desc">
		
		
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

		
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<?php if($this->model->description){echo $this->model->description;} ?>
	</div>
</div>

