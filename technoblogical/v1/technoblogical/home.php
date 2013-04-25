 <?php get_header(); ?> 
      <article class="alignRight">
<!-- google_ad_section_start -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="<?php echo get_permalink(); ?>"><h3><?php the_title() ;?></h3></a>
          <?php the_post_thumbnail(); ?>
          <span id="authorCredentials">Written by <?php the_author_link(); ?></span>
          <?php the_excerpt(); ?>
          <ul class="buttonlogical inlineBlock previousPostNextPost">
          </ul>
        <?php endwhile; else: ?>
          <p>Sorry, no posts to list</p>
        <?php endif; ?>
         <ul class="buttonlogical inlineBlock previousPostNextPost">
          <?php next_posts_link('<li>Older Posts</li>'); ?>
          <?php previous_posts_link('<li>Newer Posts</li>'); ?>
        </ul>
<!-- google_ad_section_end -->
      </article>
         <?php get_sidebar(); ?> 
       <?php get_footer(); ?>