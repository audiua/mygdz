<?php


class VkController extends Controller{

	const CLIENT_ID = '4745114';
	const ACCESS_TOKEN = 'b7e28a389111ccb022425ef7db3ab2e7037c6ae2c507b21074899edf3e12b91ec0ae040ba7dc2ef8c1442';

	// флаг что есть публ
	private $_p=false;

	public function actionIndex($hash=null){

		if($hash !== '5b717f9e843de36448780e90f00942fc'){
			Yii::app()->end();
		}

		$model = $this->getGdz();

		// d($model);

		if($model){

			$str = '';


			if($this->_p){
				$str .= $this->normalDate(time()).' обновлено гдз ';
			} else {
				$str .= $this->normalDate(strtotime($model->public_time)).' добавлено гдз ';
			}	

			$str .= $model->clas->slug . ' клас ' . $model->subject->title . ' ' . $model->author  . ' ' . Yii::app()->createAbsoluteUrl( $model->getUrl() );

			$this->invoke('wall.post', array(
			    'owner_id' => -86651632,
			    'message' => $str,
			    'from_group' => 1
			));
		}

		Yii::app()->end();
	}

	private function invoke($name, array $params = array()){
		$params['access_token'] = self::ACCESS_TOKEN;
		$content = file_get_contents('https://api.vkontakte.ru/method/'.$name.'?'.http_build_query($params));
		$result = json_decode($content);
		print_r($result);
	}

	private function getGdz(){

		$criteria = new CDbCriteria;
		$criteria->condition = 'public=1';
		$criteria->order = 'update_time ASC';
		$gdz = Book::model()->find($criteria);
		// d($gdz);

		if($gdz){
			$this->_p = true;
			$gdz->update_time = time();
			if( ! $gdz->update()){
				die($gdz->gerErrors);
			}
		
			return $gdz;
		}

		return null;

	}

	private function normalDate($date){
	    $month=array(
	    'January'=>"Січня",'February'=>"Лютого",'March'=>"Березня",
	    'April'=>"Квітня",'May'=>"Травня",'June'=>"Червня",
	    'July'=>"Липня",'August'=>"Серпня",'September'=>"Вересня",
	    'October'=>"Жовтня",'November'=>"Листопада",'December'=>"Грудня");

	    $a=$month[date("F", $date)];
	    $b=date("j",$date);
	    $c=date("Y", $date);
	    $t = date('H:i', $date);
	    return $b.' '.$a." ".$c.' року о '.$t;
	}

}





