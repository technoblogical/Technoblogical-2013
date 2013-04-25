 <?php get_header(); ?> 
      <article class="alignRight">
<!-- google_ad_section_start -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="<?php echo get_permalink(); ?>"><h2><?php the_title() ;?></h2></a>
          <?php the_post_thumbnail(); ?>
          <span id="authorCredentials">Written by <?php the_author_link(); ?></span>
          <?php the_excerpt(); ?>
        <?php endwhile; else: ?>
          <p>Sorry, no posts to list</p>
        <?php endif; ?>
<!-- google_ad_section_end -->
      </article>
         <?php get_sidebar(); ?> 
       <?php get_footer(); ?>