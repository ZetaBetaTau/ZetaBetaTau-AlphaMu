<?php get_header(); ?>
<div class="container">
<div class="row">

<div class="span3">

    <?php get_sidebar(); ?>   

  </div>
  <div class="span9">
    <h1>News</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   </h2>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
	<?php the_excerpt(); ?>
	<a href="<?php the_permalink(); ?>">Read More...</a>
	
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
</div>
</div>
<?php get_footer(); ?>