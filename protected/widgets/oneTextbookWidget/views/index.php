<?php 
// d();
$path = 'images/gdz/'.$this->params['clas'].'/'.$this->params['subject'].'/'.$this->model->slug.'/book';?>

<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 book">
		
		<?php //echo CHtml::image(Yii::app()->baseUrl . '/' . $path.'/'.$this->model->img, 'ГДЗ ' . $this->model->clas->slug .' клас '. $this->model->title . ' ' . $this->model->author, 
		echo CHtml::image($this->model->getThumb(200,250,'resize'), 'ГДЗ ' . $this->model->clas->slug .' клас '. $this->model->title . ' ' . $this->model->author, 
			array('class'=>'', 'width'=>'200', 'height'=>'250')); 
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
		<div><small>клас: </small><?php echo $this->model->clas->name; ?> клас</div>

		<?php if($this->model->year): ?>
		<div><small>рік: </small><?php echo $this->model->year; ?></div>
		<?php endif; ?>

		<?php if($this->model->edition): ?>
		<div><small>видавництво: </small><?php echo $this->model->edition; ?></div>
		<?php endif; ?>

		<?php if($this->model->isbn): ?>
		<div><small>isbn: </small><?php echo $this->model->isbn; ?></div>
		<?php endif; ?>

		<?php if($this->model->lang): ?>
		<div><small>мова навчання: </small><?php echo $this->model->lang; ?></div>
		<?php endif; ?>

		<div class=""><a target="_blank" href="<?= $this->model->getPdfLink(); ?>">Скачати підручник</a></div>
		

		<div class="social-likes">
			<div class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</div>
<!--			<div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Вконтакте</div>-->
			<!-- <div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div> -->
			<div class="plusone" title="Поделиться ссылкой в Гугл-плюсе">Google+</div>
		</div>

		
	</div>
</div>

