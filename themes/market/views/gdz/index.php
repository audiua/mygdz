<?php  
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>$this->breadcrumbs,
    'homeLink'=>CHtml::link('<span class="glyphicon glyphicon-home" aria-hidden="true"></span>', Yii::app()->homeUrl),
    'inactiveLinkTemplate'=>'<noindex><span class="sim-link">{label} <span class="glyphicon glyphicon-chevron-down small"></span></span></noindex>',
));
?>

<!-- <img src="/images/horisont.png" alt=""> -->

<h1>ГДЗ (Готові домашні завдання)</h1>
<div class="description">
	
	<p>
		У даному розділі зібрані розв'язки домашніх завдань для середніх та старших класів (5-11) загальноосвітніх шкіл України. Якщо при рішенні домашнього завдання у Вас виникають труднощі або Ви бажаєте перевірити правильність свого розв'язку, то за допомогою збірників ГДЗ, які тут представлені, Ви зможете легко знайти правильне рішення до завдання, щоб звіритись або знайти правильний шлях для розв'язку.
	</p> 
	<p>
		Готові домашні завдання згруповані у збірники і мають вигляд підручників, до яких містять рішення. Для того щоб знайти рішення до завдання, потрібно вибрати клас, предмет, посібник до необхідного Вам підручника, а далі - відповідний номер завдання. Також можливі випадки, коли рішення об'єднані в сторінки, тому Вам потрібно вибрати сторінку, яка містить номер необхідного завдання. 
	</p>
	
</div>
<div class="separator"></div>
<div class="info">Виберіть клас</div>

<?php $this->widget('ClasNumbWidget'); ?>

<div class="clear"></div>
<div class="separator"></div>

<?php $this->widget('DataBookWidget', array('model'=>$books)); ?>

<div class="clear"></div>
<div class="separator"></div>
<div class="info">Як правильно використовувати готові домашні завдання?</div>
<div class="description">
	<p>
		Зрозуміло, що деякі учні можуть бездумно списувати готові рішення або відповіді в зошит, хоча, ми сподіваємось, що більшість учнів
		так не роблять. А ті хто так робить, то це не гарантує їм (лінивим учням) отримання гарних оцінок і отримання будь-яких знань. 
		<strong>Звертаємо Вашу увагу</strong>, що так можуть робити лише не дуже розумні люди, які можуть такими і залишитися на все життя.
	</p>

	<p>
		Справжня мета даних збірників ГДЗ для середніх та старших класів (5-11) загальноосвітніх шкіл України є в тому, щоби кожен 
		школяр отримав змогу, щонайменше, побачити вірну відповідь для перевірки і, як максимум, побачити правильний 
		розв'язок для того, щоб зрозуміти, як правильно потрібно виконати своє домашнє завдання. А також ГДЗ 
		онлайн дуже зручно використовувати турботливим батькам, які приділяють час для перевірки домашньої роботи у своїх діток.
	</p>
	<p>
		Команда <strong>SHKOLYAR.INFO</strong> намагається перевіряти правильність готових рішень, але ми не несемо відповідальності за отримані оцінки при повному копіюванні готових розв'язків домашніх завдань.
	</p>
</div>
