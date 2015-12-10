<?php

class TextbookController extends Controller{

const CACHE_TIME = 7200;

public $layout='';
public $canonical;
public $clasModel=null;
public $subjectModel=null;
public $bookModel=null;
public $nested;
public $h1='Підручники';
public $param;
public $keywords='підручники онлайн, скачати підручники';
public $description='Підручники для середніх загальноосвітніх шкіл України.';



public function init(){

	$this->param = $this->getActionParams();

	Yii::import('ext.mobileDetect.Mobile_Detect');
    $detect = new Mobile_Detect();
    if( $detect->isMobile() || $detect->isTablet() ){
		Yii::app()->theme = 'm';
    }

    return parent::init();
}

/**
 * Declares class-based actions.
 */
public function actions(){

	return array(
		'page'=>array(
			'class'=>'CViewAction',
		)
	);

}


public function filters() {
	return array(
		// array( 'COutputCache', 'duration'=> 60, ),
		// убираем дубли ссылок
		array('DuplicateFilter')
	);
}



/**
 * This is the default 'index' action that is invoked
 * when an action is not explicitly requested by users.
 */
public function actionIndex(){

	// TODO - закешировать на 4 hour
	if($this->beginCache('main-textbook-page-'.Yii::app()->theme->name , array('duration'=>self::CACHE_TIME, 'varyByParam'=>array('p'))) ){

		$this->breadcrumbs = array(
			'Головна'=>Yii::app()->homeUrl,
		);

		$activePage = Yii::app()->request->getParam('p','');
		if( $activePage ){
			$page = ' / Сторінка '.$activePage;
		} else {
			$page = '';
		}

		$this->pageTitle = 'Підручники'.$page;
		$this->canonical = Yii::app()->createAbsoluteUrl('/');

		$criteria = new CDbCriteria;
		$criteria->condition = 't.public=1';
		$criteria->addCondition('t.publish_date<'.time());

		$books = new CActiveDataProvider('Textbook',array('criteria'=>$criteria,'pagination'=>array('pageSize'=>12,'pageVar'=>'p')));

		// кешируем сдесь html страницы
		$this->render('index', array('books'=>$books));


		$this->endCache(); 
	}

}

/**
 * [actionClas description]
 * @return [type] [description]
 */
public function actionClas($clas){
	$clas = str_replace('-clas', '', $clas);
	// d();

	// TODO - закешировать на сутки
	if($this->beginCache('textbook_clas_page'.Yii::app()->theme->name, array('duration'=>self::CACHE_TIME, 'varyByParam'=>array('clas', 'p'))) ){
		
		$this->checkClas($clas);
		$this->clasModel = TextbookClas::model()->find('name=:clas',array(':clas'=>$clas));

		$this->breadcrumbs = array(
			'Головна'=>Yii::app()->homeUrl,
			'Підручники'=>$this->createUrl('/textbook'),
			$clas . ' клас'

		);

		$activePage = Yii::app()->request->getParam('p','');
		if( $activePage ){
			$page = ' / Сторінка '.$activePage;
		} else {
			$page = '';
		}

		$this->keywords = 'підручники для'.$this->clasModel->name . ' класу, підручники онлайн, скачати підручники ';
		$this->description = 'підручники '.$this->clasModel->name . ' клас ';
		// $this->h1 = 'ГДЗ '.(int)$clas.' клас';
		// $this->pageTitle = 'SHKOLYAR.INFO - '.$this->h1;
		// $this->canonical = Yii::app()->createAbsoluteUrl('/'.$clas);

		$this->setMeta($page);

		$criteria = new CDbCriteria;
		$criteria->condition = 't.class_id='.$this->clasModel->id;
		$criteria->addCondition('t.public=1');
		$criteria->addCondition('t.publish_date<'.time());

		$books = new CActiveDataProvider('Textbook', 
			array(
				'criteria'=>$criteria, 
				'pagination'=>array('pageSize'=>12,'pageVar'=>'p'),
			)
		);

		$this->render('clas', array('books'=>$books));

		$this->endCache(); 
	}
}

/**
 * [actionSubject description]
 * @return [type]          [description]
 */
public function actionSubject($clas, $subject){
	$clas = str_replace('-clas', '', $clas);
	// d();

	// TODO - закешировать на сутка
	if($this->beginCache('textbook_subject_page'.Yii::app()->theme->name, array('duration'=>self::CACHE_TIME, 'varyByParam'=>array('clas', 'subject', 'p'))) ){

		$this->clasModel = $this->loadClas($clas);
		$this->subjectModel = $this->loadSubject($subject);
		// d($this->subjectModel);

		$activePage = Yii::app()->request->getParam('p','');
		if( $activePage ){
			$page = ' / Сторінка '.$activePage;
		} else {
			$page = '';
		}

		$this->keywords = 'підручники для '.$this->clasModel->name . ' класу '. $this->subjectModel->name.', підручники онлайн, скачати підручники ';
		$this->description = 'підручники '.$this->clasModel->name . ' клас '. $this->subjectModel->name;

		// $this->h1 = 'ГДЗ '.(int)$clas.' клас '. $this->subjectModel->subject->title;
		// $this->pageTitle = 'SHKOLYAR.INFO - '.$this->h1;
		// $this->canonical = Yii::app()->createAbsoluteUrl('/'.$clas.'/'.$subject);
		$this->setMeta($page);

		$criteria = new CDbCriteria;
		$criteria->condition = 't.class_id='.$this->clasModel->id;
		$criteria->addCondition('t.subject_id='.$this->subjectModel->id);
		$criteria->addCondition('t.public=1');
		$criteria->addCondition('t.publish_date<'.time());

		$books = new CActiveDataProvider('Textbook', 
			array(
				'criteria'=>$criteria, 
				'pagination'=>array('pageSize'=>12,'pageVar'=>'p'),
			)
		);

		$this->breadcrumbs = array(
			'Головна'=>Yii::app()->homeUrl,
			'Підручники'=>$this->createUrl('/textbook'),
			$clas . ' клас' => $this->createUrl('/textbook/'.$this->clasModel->slug),
			$this->subjectModel->name
		);

		$this->render('subject', array('books'=>$books));

		$this->endCache(); 
	}
}

/**
 * [actionBook description]
 * @return [type] [description]
 */
public function actionBook( $clas, $subject, $book ){
	$clas = str_replace('-clas', '', $clas);
	// TODO - закешировать на сутка
	if($this->beginCache('textbook_book_page'.Yii::app()->theme->name, array('duration'=>self::CACHE_TIME, 'varyByParam'=>array('clas', 'subject', 'book'))) ){
		
		// $path = Yii::app()->theme->basePath;
	 //    $mainAssets = Yii::app()->AssetManager->publish($path);
		// Yii::app()->getClientScript()->registerScriptFile($mainAssets.'/js/panzoom.js', CClientScript::POS_END);

		$this->checkClas($clas);
		$this->checkSubject($subject);
		$this->checkBook($book);

		$this->clasModel = $this->loadClas($clas);
		$this->subjectModel = $this->loadSubject($subject);
		$this->bookModel = $this->loadBook($book);

		$this->keywords = 'скачати підручник '.$this->clasModel->name . ' клас '. $this->subjectModel->name.' ' . $this->bookModel->author . ' ' . $this->bookModel->year.', підручники онлайн, скачати підручники ';
		$this->description = 'підручник '.$this->clasModel->name . ' клас '. $this->subjectModel->name.' ' . $this->bookModel->author . ' ' . $this->bookModel->year;


		$this->breadcrumbs = array(
			'Головна'=>Yii::app()->homeUrl,
			$clas . ' клас' => $this->createUrl('/textbook/'.$this->clasModel->slug),
			$this->subjectModel->name => $this->createUrl('/textbook/'.$this->clasModel->slug.'/'.$this->subjectModel->slug),
			$this->bookModel->author
		);

		$this->h1 = 'Підручник '.$clas.' клас '. $this->subjectModel->name . ' ' .$this->bookModel->author;
		$this->pageTitle = $this->h1;
		// $this->canonical = Yii::app()->createAbsoluteUrl('/gdz/'.$clas.'/'.$subject.'/'.$book);
		// $this->setMeta();

		$this->render('book');

		$this->endCache(); 
	
	}
}

/**
 * [loadGdzClas description]
 * @param  [type] $clas [description]
 * @return [type]       [description]
 */
private function loadClas($clas){

	$clasModel = TextbookClas::model()->find('name=:clas',array(':clas'=>(int)$clas));
	if( ! $clasModel ){
		throw new CHttpException('404', 'not clas');
	}

	return $clasModel;
}

/**
 * загрузка модели гдз предмета по слагу родительского предмета
 * @param  str $subject slug subject
 * @return GdzSubject
 */
private function loadSubject($subject){

	// d();

	$subjectModel = TextbookSubject::model()->findByAttributes(array('slug'=>$subject));
	// модель предмета
	if( ! $subjectModel){
		throw new CHttpException('404', 'нет такого предмета');
	}

	return $subjectModel;
}

private function loadBook($book){
	// модель книги
	$criteria=new CDbCriteria;
	$criteria->condition='class_id=:classId';
	$criteria->addCondition('subject_id=:subjectId');
	$criteria->addCondition('slug=:slug');
	$criteria->addCondition('t.publish_date<'.time());
	$criteria->addCondition('t.public=1');
	$criteria->params = array(
	    ':classId'=>$this->clasModel->id, 
	    ':subjectId'=>$this->subjectModel->id,
	    ':slug'=>$book
	);
	$gdzBookModel = Textbook::model()->find($criteria);

	// проверка на наличие учебника
	if( ! $gdzBookModel ){
		throw new CHttpException('404', 'нет такого учебника');
	}

	return $gdzBookModel;
}

/**
 * [checkClas description]
 * @param  [type] $clas [description]
 * @return [type]       [description]
 */
private function checkClas($clas){
	if( (int)$clas > 11 || (int)$clas < 5 ){
		throw new CHttpException('404', 'немае такого класу');
	}
}

/**
 * [checkSubject description]
 * @param  [type] $subject [description]
 * @return [type]          [description]
 */
private function checkSubject($subject){
	if( ! $subject ){
		throw new CHttpException('404', 'немае такого предмету');
	}
}

/**
 * [checkBook description]
 * @param  [type] $book [description]
 * @return [type]       [description]
 */
private function checkBook($book){
	if( ! $book ){
		throw new CHttpException('404', 'немае такои книги');
	}
}

private function setMeta($page=''){
	if($this->clasModel){
		$this->h1 = 'Підручники '. $this->clasModel->name.' клас';
		$this->canonical = '/textbook/'.$this->clasModel->slug;
		
	}

	if($this->subjectModel){
		$this->h1 .= ' ' . $this->subjectModel->name . ' ';
		$this->canonical .= '/'.$this->subjectModel->slug;
	}

	if($this->bookModel){
		$this->h1 .= $this->bookModel->author;
		$this->canonical .= '/'.$this->bookModel->slug;
	}

	$this->canonical = Yii::app()->createAbsoluteUrl($this->canonical);
	$this->pageTitle = $this->h1 . $page;
}


public function checkerBook($clas, $subject, $book){

	$bookClas = $this->loadClas($clas, 'textbook');
	// print_r($bookClas);
	// die;
   	$bookSubject = $this->loadSubject($subject, 'textbook');
 
	$criteria = new CDbCriteria;
	$criteria->condition='textbook_clas_id=:classId';
	$criteria->addCondition('textbook_subject_id=:subjectId');
	$criteria->addCondition('slug=:slug');
	$criteria->params = array(
	    ':classId' => $bookClas->id, 
	    ':subjectId' => $bookSubject->id,
	    ':slug' => $book
	);


	return TextbookBook::model()->count($criteria);

}

}