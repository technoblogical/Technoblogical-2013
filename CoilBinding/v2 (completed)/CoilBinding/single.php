<?php get_header(); ?>
<?php get_sidebar(); ?>
 <article class="floatRight">

     <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
               <h1><a href="<?php echo get_permalink(); ?>"><? the_title() ?></a></h1>
               <small>written by <?php the_author_link(); ?> </small>
               <?php the_content() ?>
               <?php endwhile; ?>
     <?php endif; ?>
     <div class="nextPostPreviousPost">
       <?php previous_post_link('<span>%link</span>','go back'); ?> 
        <?php next_post_link('<span>%link</span>','go forward'); ?> 
     </div>



 </article>
 <div class="rootClearFloat"></div>
 <?php get_footer(); ?>