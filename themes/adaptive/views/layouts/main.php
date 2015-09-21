<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		
		<div class="container">
			<div class="row">
				<?php $this->renderPartial('//layouts/menu'); ?>
			</div>
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                	<?= $content; ?>

				</div>
				<div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
					<?php $this->renderPartial('//layouts/sidebar'); ?>
				</div>
			</div>

			<div class="row">
				<?php $this->renderPartial('//layouts/footer'); ?>
			</div>
		</div>


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		
		<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script> -->
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/app.js"></script>
	</body>
</html>
