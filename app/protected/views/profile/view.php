<div class="row" style="margin-top:40px;">
	<div class="large-10 large-centered columns">
		<div class="small-4 columns">
			<img style="border: 1px solid #EEE;" width="200" src="<?php echo Yii::app()->request->baseUrl . '/images/' . $model->image_path; ?>">
			<div style="text-align:center;width:200px; padding-top:5px;padding-bottom:5px;background:#99CCCC; color:#000;">
	            <span class="brandon bold"><?php echo strtoupper($model->firstname); ?></span>
		    </div>
		</div>
		<div class="small-7 columns" style="margin-left: 20px;">
			<div class="row" style="border-bottom: 1px solid #999;">
				<h1 style="margin-bottom: 5px; margin-top: 0; font-size: 42px; font-color: #333;" class="brandon bold"><?php echo strtoupper($model->share_expertise); ?></h1>
			</div>
			<div class="row" style="margin-top:10px;">
				<p class="profile-label">
					 <span class="profile-view-label">Neighborhood:</span> <?php echo $model->location; ?>
				</p>
			</div>
			<div class="row">
				<p class="profile-label">
					<span class="profile-view-label">Skill Level:</span> <?php echo $model->getLevelText(); ?>
				</p>
			</div>
			<div class="row">
				<p class="profile-label">
					<span class="profile-view-label">Experience:</span> <?php echo $model->experience; ?> Years
				</p>
			</div>

			<div class="row" style="margin-top:10px;">
				<span style="font-size:1.2em; color: #666;">Need mentoring in:</span>
				<p class="profile-label"><?php echo $model->learn_expertise; ?></p>
			</div>
			<br>
			<div class="row">
				<a href="#" data-reveal-id="myModal" class="dark-orange small button left brandon bold">CONTACT</a>
			</div>
		</div>
		<div class="small-2 columns"></div>
	</div>
</div>

<div class="row" style="margin-top: 25px;">
	<div class="large-10 large-centered columns">
		<div class="row">
			<div class="large-12 columns" style="border-bottom: 1px solid #999;">
				<h3 style="margin-bottom: 5px; font-size: 24px;" class="brandon bold">MY STORY</h3>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="large-12 columns">
				<p class="jubilat regular" style="font-size: 18px; color: #666;"><?php echo $model->share_expertise_description; ?></p>
			</div>
		</div>
	</div>
</div>

<div class="row" style="margin-top: 25px;">
	<div class="large-10 large-centered columns">
		<div class="row">
			<div class="large-12 columns" style="border-bottom: 1px solid #999;">
				<h3 style="margin-bottom: 5px; font-size: 24px;" class="brandon bold">MY IDEAL MENTOR</h3>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="large-12 columns">
				<p class="jubilat regular" style="font-size: 18px; color: #666;"><?php echo $model->learn_expertise_description; ?></p>
			</div>
		</div>
	</div>
</div>
<br><Br>
<div class="row">
	<div class="large-4 large-centered columns">
		<a href="/tacit/app" class="teal large button brandon bold">RETURN TO MENTORS</a>
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