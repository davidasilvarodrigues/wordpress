<?php include 'header.php'; ?>
<?php query_posts("showposts=3&paged=$paged"); ?>
<?php if(have_posts()): ?>
	<?php $counter = 1; ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		<section>
		<?php if (($counter % 2) == 1 ): ?>
			<div class="container-fluid">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'single-post-thumbnail'); ?>
				<?php if($image): ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" id="<?php echo $counter; ?>" style="background-image: url(<?php echo $image[0]; ?>">
					</div>
				<?php else: ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" id="<?php echo $counter; ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/imagemdeerro.png)">
					</div>
				<?php endif ?>

				<div class="col-md-6 col-sm-6 col-xs-12">0
					<h2><?php the_title(); ?></h2>
					<?php echo the_content(); ?>
				</div>
			</div>
			<div class="linha"></div>

		<?php else: ?>
			<div class="container-fluid">
			<div class="col-md-6 col-sm-6 col-xs-12 even">
					<h2><?php the_title(); ?></h2>
					<?php echo the_content(); ?>
				</div>

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'single-post-thumbnail'); ?>
				<?php if($image): ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" style="background-image: url(<?php echo $image[0]; ?>">
					</div>
				<?php else: ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/imagemdeerro.png)">
					</div>
				<?php endif ?>
			</div>
			<div class="linha"></div>
		<?php endif ?>
		</section>
		<?php $counter++  ?>
	<?php endwhile ?>
<?php endif ?>
<?php include 'footer.php'; ?>
