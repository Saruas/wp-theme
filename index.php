<?php get_header(); ?>

<div class="test-sidebar-preview">
	<div class="test-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
		</div>
		<h1 class="test-username"><?php print $fullName; ?></h1>
		<h2 class="test-title"><?php print $usertitle; ?></h2>
		<h2 class="test-discription"><?php print $description; ?></h2>
			<div class="icon-wrapper">
				<ul class="socialMedia">
					<li class="socialMedia linkedIn"><a class="linkedIn" href="https://www.linkedin.com/in/<?php print $linkedIn; ?>"></a></li>
					<li class="socialMedia facebook"><a class="facebook" href="https://www.facebook.com/<?php print $facebook; ?>"></a></li>
					<li class="socialMedia instagram"><a href="https://www.instagram.com/<?php print $instagram; ?>"></a></li>
				</ul>
			</div>		
	</div>
</div>


<?php get_footer(); ?>