<h1><?= $this->h1; ?></h1>

<?php $this->widget('OneTextbookWidget'); ?>

<div class="separator"></div>
<div class="clearfix"></div>

<?php if($embedConfigId): ?>
<iframe width="700" height="500" src="//e.issuu.com/embed.html#<?= $embedConfigId; ?>" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- my_adaptive_top -->
<ins class="adsbygoogle"
	 style="display:block"
	 data-ad-client="ca-pub-9657826060070920"
	 data-ad-slot="5318848293"
	 data-ad-format="auto"></ins>
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



	
