<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/foundation.css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/custom.modernizr.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id="<?php echo $this->getUniqueId(); ?>" class="<?php echo $this->action->id; ?>">
	<div class="container">
		<div id="header">
			<nav class="top-bar">
				<!-- Title Area -->
				<ul class="title-area">
					<li class="name">
						<h1><a href="/tacit/app">TACIT.ORG</a></h1>
					</li>

					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<ul class="left">
						<li><a href="?r=profile">FIND MENTORS</a></li>
					</ul>

					<ul class="right">
						<?php if(Yii::app()->user->isGuest) { ?>
						<li><a href="?r=site/login" class="teal button">LOGIN</a>
						<?php } else { ?>
						<li><a href="?r=profile/view&id=<?php echo Yii::app()->user->id; ?>">MY PROFILE</a>
						<li><a href="?r=site/logout">LOGOUT</a>
						<?php } ?>	
					</li>
				</section>
			</nav>
		</div><!-- header -->

		<?php echo $content; ?>

		<div id="footer">
		</div><!-- footer -->

	</div><!-- page -->

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/zepto.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>

	<script>
	    $(document).foundation();
	</script>
</body>
</html>
