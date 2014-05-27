<?php if (!is_singular('team', 'client')) { ?>
<p class="byline author vcard"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a> | <time class="published" datetime="<?php echo get_the_time('c'); ?>">Posted: <?php echo get_the_date(); ?></time></p>
<?php } ?>
<?php if (is_singular('team')) {
	get_template_part('templates/content', 'job-title');
} ?>