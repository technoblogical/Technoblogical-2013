<?php get_header(); ?>
<?php get_sidebar(); ?>
 <article class="floatRight">

     <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
               <h2><a href="<?php echo get_permalink(); ?>"><? the_title() ?></a></h2>
               <small>written by <?php the_author_link(); ?> </small>
               <?php the_content() ?>
               <?php endwhile; ?>
     <?php endif; ?>



 </article>
 <div class="rootClearFloat"></div>
 <?php get_footer(); ?>