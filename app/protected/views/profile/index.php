<br><Br>
<?php foreach($profiles as $profile) { ?>
	<div id="profile-list" class="row" style="margin-bottom: 40px; ">
		<div class="large-9 large-centered columns" style="padding-bottom: 20px; border-bottom: 1px solid #999;">
			<div class="row">
				<div class="small-5 columns">
					<a href="?r=profile/view&id=<?php echo $profile->user_id; ?>"><img width="200" src="<?php echo Yii::app()->request->baseUrl . '/images/' . $profile->image_path; ?>"></a>
				</div>
				<div class="small-7 columns">
					<div class="row">
						<div class="small-12 columns">
							<a href="?r=profile/view&id=<?php echo $profile->user_id; ?>"><h2 style="margin-bottom: 0px; margin-top: 0;"><?php echo strtoupper($profile->share_expertise); ?></h2></a>
						</div>
					</div>
					<div class="row" style="margin-top:10px;">
						<div class="small-4 columns">
							<p class="profile-label">
								<span class="profile-view-label">Experience:</span> <?php echo $profile->experience; ?>
							</p>
						</div>
						<div class="small-8 columns">
							<p class="profile-label">
								<span class="profile-view-label">Skill Level:</span> <?php echo $profile->getLevelText(); ?>
							</p>
						</div>
					</div>

					<div class="row" style="margin-top:10px;">
						<div class="small-12 columns">
							<span style="font-size:14px; color: #666;">Need mentor who knows:</span>
							<p class="profile-label"><?php echo $profile->learn_expertise; ?></p>
						</div>
					</div>

					<div class="row" style="margin-top:10px;">
						<div class="small-12 columns">
							<p><?php echo StringHelper::trimToExcerpt($profile->share_expertise_description); ?> <a href="?r=profile/view&id=<?php echo $profile->user_id; ?>">More info</a></p>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
<?php } ?>

