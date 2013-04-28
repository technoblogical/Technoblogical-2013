<?php get_header(); ?>
 <article class="floatRight">
  <!-- google_ad_section_start -->
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>    
  <?php  ?>
  <h1>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
      <?php the_title(); ?>
    </a>
  </h1>
  <small>Written by: <?php the_author_link(); ?></small>
  <?php the_content(); ?></br>
  <?php endwhile; ?>
  <?php endif; ?>

  <div class="previousPostNextPost">
  <?php previous_post_link('%link'); ?>
  <?php previous_post_link('%link'); ?>
  </div>  


<!-- google_ad_section_end -->
 </article>
 <?php get_sidebar(); ?>
 <div class="rootClearFloat"></div>
 <?php get_footer(); ?>