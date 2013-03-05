<div class="row" style="margin-top:40px;">
	<div class="large-10 large-centered columns">
		<div class="small-4 columns">
			<img width="200" src="<?php echo Yii::app()->request->baseUrl . '/images/' . $model->image_path; ?>">
		</div>
		<div class="small-4 columns">
			<div class="row">
				<?php echo $model->firstname; ?> &nbsp;|&nbsp; <?php echo $model->getLocationText(); ?>
			</div>
			<div class="row">
				<h3><?php echo $model->share_expertise; ?></h3>
			</div>
			<div class="row">
				<span style="font-size:0.90em; color: #666;">Interested in developing my skills in:</span>
				<p><?php echo $model->learn_expertise; ?></p>
			</div>
		</div>
		<div class="small-4 columns">
			<a href="#" data-reveal-id="myModal" class="button right">CONTACT ME</a>
		</div>
	</div>
</div>

<div class="row" style="margin-top: 25px;">
	<div class="large-10 large-centered columns">
		<div class="row">
			<div class="small-6 columns">
				<div class="panel">
					<p><?php echo $model->share_expertise_description; ?></p>
				</div>
			</div>
			<div class="small-6 columns">
				<div class="panel"> 
					<p><?php echo $model->learn_expertise_description; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="myModal" class="reveal-modal medium">
  <h3>Contact <?php echo $model->firstname; ?></h3>
  <form>
  <h5 style="color: #666; border-bottom:1px solid rgb(238, 181, 181);margin-bottom: 10px;">Contact Info</h5>

    <div class="row">
      <div class="large-6 columns">
        <input type="text" placeholder="First Name">
      </div>
      <div class="large-6 columns">
        <input type="text" placeholder="Last Name">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <input type="text" placeholder="Email">
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <input type="text" placeholder="Phone Number">
      </div>
    </div>


<h5 style="color: #666;border-bottom:1px solid rgb(238, 181, 181); margin-bottom: 10px;">Your Message</h5>

		<div class="row">
      <div class="large-12 columns">
        <textarea style="height:120px;" placeholder="Tell <?php echo $model->firstname; ?> what you want to learn"></textarea>
      </div>
    </div>

    <div class="row">
    	<div class="large-12 columns">
    		<a href="" class="button">SEND</a>
    	</div>
    </div>

</form>
</div>