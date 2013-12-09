<?php get_header(); ?>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/fitvids.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/jquery.backstretch.js"></script>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".container").fitVids();
	$(".herobg").backstretch([
      "<?php bloginfo('template_url'); ?>/bootstrap/img/herobg.jpg"
    , "http://image.cdnllnwnl.xosnetwork.com/fls/30200/old_site/images/huskystadium1.jpg"
    , "<?php bloginfo('template_url'); ?>/bootstrap/img/dave.jpg"
	, "<?php bloginfo('template_url'); ?>/bootstrap/img/camping.jpg"
  ], {duration: 3000, fade: 750});
  });
</script>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
