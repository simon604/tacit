<div id="create">
	<div class="row" style="margin-top:40px; border-bottom: 4px solid white;">
		<div class="small-6 small-centered columns text-center">
			<div class="row">
				<h1 style="font-size: 56px; color: white; margin-bottom: 4px;" class="brandon bold">HELLO AND WELCOME!</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="small-12 small-centered columns text-center">
			<p style="margin-top:20px;font-size: 24px; color: #666;" class="jubilat regular">
			Fill out the information below to create your<br> TACIT EXCHANGE membership!</p>
		</div>
	</div>
	
	<div class="row">
		<div class="small-6 small-centered columns text-center">
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
	</div>
</div>