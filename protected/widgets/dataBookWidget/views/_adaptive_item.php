<?php 

$path = 'images/gdz/'.$data->clas->slug.'/'.$data->subject->slug.'/'.$data->slug.'/book'; ?>



<div class="item col-lg-3 col-md-4 col-sm-4 col-xs-12"> 

	<?php

	echo CHtml::link(


	CHtml::image( 
		// $data->getThumb(165,250,'crop'),
		Yii::app()->baseUrl . '/' . $path.'/'.$data->img, 
		'ГДЗ - ' . $data->clas->slug . ' клас ' . $data->subject->title . ' ' .  $data->author, 
		array(
			'class'=>'', 
			'title'=>'ГДЗ - ' . $data->clas->slug . ' клас ' . $data->subject->title . ' ' .  $data->author
		)
	), array( $data->clas->slug.'/'.$data->subject->slug.'/'.$data->slug) ); ?>


	<?= CHtml::link('<div>'.$data->author.' '.$data->title.' '.$data->clas->slug.' клас</div>', $data->clas->slug.'/'.$data->subject->slug.'/'.$data->slug); ?>
		<?php 
			if( !empty($data->properties) ){
				echo '<div class="desc">'.$data->properties.'</div>';
			}
		?>
</div>

					
