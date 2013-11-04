<?php get_header(); ?>

<div class="full">
  <div class="container">
    <div class="row-fluid section title">
      <!-- <H1>Blog</H1> -->
      <p class="intro">Thoughts neatly packaged into individual posts.<p>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="row-fluid">
      <!-- Title // Date // Excerpt // Read More --> 
          <div class="post-title post-byline post-excerpt blog-content span8">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><em><?php the_time('F jS, Y'); ?></em></p>
            <?php the_excerpt(); ?><a class="m-btn small" href="<?php the_permalink(); ?>">Read More</a>
          </div>
      <!-- Post Thumbnail === Featured Image -->
          <div class="blog-content span4">
            <span class="center blog-thumb"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a></span>
          </div>
      </article>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, there are no posts.'); ?></p>
      <?php endif; ?>
      
      <div class="navigation">
        <div class="nav-previous"><?php previous_posts_link('<div class="m-btn big">&laquo; Previous</div>') ?></div>
        <div class="nav-next"><?php next_posts_link('<div class="m-btn big">Next &raquo;</div>') ?></div>
      </div>     
  </div>
</div>

<?php get_footer(); ?>