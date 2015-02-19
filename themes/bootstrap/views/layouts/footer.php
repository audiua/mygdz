<div class="footer">
	
	<nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">
		  <?php echo ($this->action->id != 'index') ? CHtml::link('ГДЗ Україна', '/', array('class'=>'navbar-brand')): '<span class="navbar-brand">ГДЗ Україна</span>' ?>
		</div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li>
				<?php  echo CHtml::link('Контакти', array('/site/page?view=contacts'), array('rel'=>'nofollow')); ?>
	        </li>
	        <li>
				<?php  echo CHtml::link('Правовласникам', array('/site/page?view=rightholder'), array('rel'=>'nofollow')); ?>
	        </li>
	        <li>
				<?php  echo CHtml::link('Рекламодавцям', array('/site/page?view=advertiser'), array('rel'=>'nofollow')); ?>
	        </li>
	        <li>
				<?php  echo CHtml::link('Правила та Угоди', array('/site/page?view=rules'), array('rel'=>'nofollow')); ?>
	        </li>
	        <li>
				<?php  echo CHtml::link('Карта сайта', array('/sitemap'), array('rel'=>'nofollow', 'target'=>'_blank')); ?>
	        </li>
	        <li>
				<?php  echo CHtml::link('sitemap.xml', array('/sitemap.xml'), array('rel'=>'nofollow', 'target'=>'_blank')); ?>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54716600-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!--LiveInternet counter--><script type="text/javascript"><!--
	new Image().src = "//counter.yadro.ru/hit?r"+
	escape(document.referrer)+((typeof(screen)=="undefined")?"":
	";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
	screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
	";"+Math.random();//--></script><!--/LiveInternet-->


	<!-- <script async src="<?php // echo Yii::app()->theme->baseUrl; ?>/js/less.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="<?php  echo Yii::app()->theme->baseUrl; ?>/js/app.js"></script>
</div>
 