<div class="sidebar">


<div class="sidebar-block">
	<!-- <div class="block-title">Block title</div> -->
	<noindex>
		<object id="textru-flash-1" type="application/x-shockwave-flash" data="http://text.ru/images/partner/banner-1.swf" width="316" height="381">
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
		</script>
	
	</noindex>
						
	


</div>

<div class="sidebar-block">
	<div class="lead text-center">Навігація по сайту</div>
	<?php $this->widget('TreeMenuWidget'); ?>
</div>




</div>