<?php get_header(); ?>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".container").fitVids();
  });
</script>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
