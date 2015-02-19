<div class="sidebar">

<div class="sidebar-block">
	<!-- <div class="block-title">Block title</div> -->
	<noindex>

		<?php 
			$ar = array(
				'<a href="http://www.wmmail.ru/index.php?ref=audiua" rel="nofollow"><img src="http://www.wmmail.ru/banners/wmmail240x400x2.gif" alt="WMmail.ru - сервис почтовых рассылок" border=0></a>',
				'<a href="http://www.seosprint.net/?ref=5507638" target="_blank"><img src="http://www.seosprint.net/baners/seo4x240x400.gif" width="240" height="400" border="0" alt="SEO sprint - Всё для максимальной раскрутки!" /></a>'

			);

			echo $ar[array_rand($ar,1)];
		?>
		
		<!-- <a href="http://api.hostinger.com.ua/redir/586518" target="_blank"><img src="http://hostinger.com.ua/banners/ru/hostinger-300x250-2.gif" alt="Хостинг" border="0" width="300" height="250" /></a> -->

		<!-- <object id="textru-flash-1" type="application/x-shockwave-flash" data="http://text.ru/images/partner/banner-1.swf" width="316" height="381">
			<param name="quality" value="high">
		    <param name="wmode" value="transparent">
			<p>Баннер text.ru</p>
		</object>
		<script type='text/javascript'>
			var flash = document.getElementById("textru-flash-1");
			var linkParent = flash.parentNode;
			var innerForm = document.createElement("form");
			innerForm.id = "textru-form-home";
			innerForm.action = "http://text.ru/";
			innerForm.method = "post";
			innerForm.target = "_blank";
			innerForm.style.display = "none";
			var innerInput = document.createElement("input");
			innerInput.type = "hidden";
			innerInput.value = "audiua";
			innerInput.name = "ref";
			innerForm.appendChild(innerInput);
			linkParent.appendChild(innerForm);
			flash.addEventListener('mousedown', function() {
				document.getElementById("textru-form-home").submit();
				return false;
			});
		</script> -->
	
	</noindex>
						
	


</div>


<div class="sidebar-block">
	<div class="lead text-center">Навігація по сайту</div>
	<?php $this->widget('TreeMenuWidget'); ?>
</div>


<div class="sidebar-block">
	<div class="lead text-center">Соц. мережі</div>
	<noindex>
		<div role="tabpanel">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#vk" aria-controls="vk" role="tab" data-toggle="tab">vk</a></li>
		    <li role="presentation"><a href="#tw" aria-controls="tw" role="tab" data-toggle="tab">tw</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="vk">
				<script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>

				<!-- VK Widget -->
				<div id="vk_groups"></div>
				<script type="text/javascript">
					VK.Widgets.Group("vk_groups", {mode: 0, width: "300", height: "150", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 86651632);
				</script>
		    </div>

		    <div role="tabpanel" class="tab-pane" id="tw">
	   
				<a rel="nofollow" class="twitter-timeline"  href="https://twitter.com/mygdz" data-widget-id="565102958497763328">Твиты от @mygdz</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				

		    </div>

		  </div>

		</div>
	</noindex>

</div>


</div>