<h1><?= $this->h1; ?></h1>

<div class="description">
	<?= $this->clasModel->description; ?>
</div>

<div class="clear"></div>

<div class="full-banner">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- my полный баннер -->
	<ins class="adsbygoogle"
	     style="display:inline-block;width:728px;height:90px"
	     data-ad-client="ca-pub-9657826060070920"
	     data-ad-slot="2417505095"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

<div class="all-book">
	<?php $this->widget('DataBookWidget', array('model'=>$books)); ?>
</div>