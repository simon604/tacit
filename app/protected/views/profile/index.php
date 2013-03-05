<div class="row">
	<div class="large-6 large-centered columns text-center">
		<h1>FIND YOUR EXPERT</h1>
	</div>
</div>

<?php foreach($profiles as $profile) { ?>
	<div id="profile-list" class="row" style="margin-bottom: 40px;">
		<div class="large-8 large-centered columns">
			<div class="row">
				<div class="small-6 columns text-center">
					<a href="?r=profile/view&id=<?php echo $profile->user_id; ?>"><img style="height: 200px;" src="<?php echo Yii::app()->request->baseUrl . '/images/' . $profile->image_path; ?>"></a>
				</div>
				<div class="small-6 columns">
					<a href="?r=profile/view&id=<?php echo $profile->user_id; ?>"><h3 style="border-bottom: 1px solid #333;"><?php echo $profile->share_expertise; ?></h3></a>
					<p><?php echo StringHelper::trimToExcerpt($profile->share_expertise_description); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

