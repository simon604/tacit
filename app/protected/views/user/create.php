<div id="create">
	<div class="row" style="margin-top:40px; border-bottom: 4px solid white;">
		<div class="small-6 small-centered columns text-center">
			<div class="row" style="">
				<h1 style="font-size: 48px; color: white;">HELLO AND WELCOME!</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered columns text-center">
			<p style="margin-top:20px;font-size: 20px; color: white;">
			FILL OUT THE INFO BELOW<br>TO START YOUR TACIT EXCHANGE MEMBERSHIP!</p>
		</div>
	</div>
	
	<div class="row">
		<div class="small-6 small-centered columns text-center">
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
	</div>
</div>