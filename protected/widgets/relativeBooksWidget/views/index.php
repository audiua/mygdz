
		<?php 
			

			foreach( $this->model as $one): 
			$path = 'images/gdz/'.$one->clas->slug.'/'.$one->subject->slug.'/'.$one->slug.'/book/'.$one->img; ?>
			
			<div class="col-xs-3 one-book"> 

				<?php

				echo CHtml::link(

				CHtml::image( 
					Yii::app()->baseUrl . '/' . $path, 
					'ГДЗ - ' . $one->clas->slug . ' клас ' . $one->subject->title . ' ' .  $one->author, 
					array(
						'class'=>'', 
						'title'=>'ГДЗ - ' . $one->clas->slug . ' клас ' . $one->subject->title . ' ' .  $one->author
					)
				), array( $one->clas->slug.'/'.$one->subject->slug.'/'.$one->slug) ); ?>

				<div class="">
					<div class="book-author"> <?php echo $one->author; ?></div>
					<div class="book-subject"> <?php echo $one->title; ?></div>
					<div class="book-clas"><?php echo $one->clas->slug; ?> клас</div>
					<?php 
						if( !empty($one->properties) ){
							echo '<div class="desc">'.$one->properties.'</div>';
						}
					?>

				</div>
			</div>

		<?php endforeach; ?>



