 <?php get_header(); ?> 
      <article class="alignRight">
<!-- google_ad_section_start -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="<?php echo get_permalink(); ?>"><h1><?php the_title() ;?></h1></a>
          <?php the_post_thumbnail(); ?>
          <span id="authorCredentials">Written by <?php the_author_link(); ?></span>
          <?php the_content(); ?>
          <ul class="buttonlogical inlineBlock previousPostNextPost">
            <?php previous_post_link('<li>%link</li>','Previous Post:</br>%title'); ?>
            <?php next_post_link('<li>%link</li>','Next Post:</br>%title'); ?>
          </ul>
        <?php endwhile; else: ?>
          <p>Sorry, no posts to list</p>
        <?php endif; ?>
<!-- google_ad_section_end -->
      </article>
         <?php get_sidebar(); ?> 
       <?php get_footer(); ?>