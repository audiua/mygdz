<h1><?= $this->h1; ?></h1>

<?php $this->widget('OneTextbookWidget'); ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- my_above_task_big -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-9657826060070920"
     data-ad-slot="6880487499"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<?php if($embedConfigId): ?>
<iframe width="320" height="250" src="//e.issuu.com/embed.html#<?= $embedConfigId; ?>" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>

<div class="separator"></div>
<div class="clearfix"></div>

<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- my_mobi_middle -->
<!--<ins class="adsbygoogle"-->
<!--     style="display:inline-block;width:336px;height:280px"-->
<!--     data-ad-client="ca-pub-9657826060070920"-->
<!--     data-ad-slot="9749047893"></ins>-->
<!--<script>-->
<!--(adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- my_above_task_big -->
<ins class="adsbygoogle"
	 style="display:inline-block;width:300px;height:250px"
	 data-ad-client="ca-pub-9657826060070920"
	 data-ad-slot="6880487499"></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<div class="clearfix"></div>
<div class="separator"></div>

<div class="lead">Популярні підручники: </div>
<div class="book-list">
	<?php $this->widget('RelativeTextbooksWidget', array('mode'=>'all')); ?>
</div>

<div class="clearfix"></div>
<div class="separator"></div>

<div class="lead">Схожі підручники: </div>
<div class="book-list">
	<?php $this->widget('RelativeTextbooksWidget', array('mode'=>'clas')); ?>
</div>



	
