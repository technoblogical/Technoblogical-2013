 <?php get_header(); ?> 


<div class="amalgamatedWrapper">
    <article>
         <?php get_sidebar( $name ); ?> 
    <?php  
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/></h2>
     <small>Written by <?php the_author_link(); ?></small>
     <?php the_excerpt(); ?>
     <div class="rootClearFloat"></div>
     <hr>
    <?php endwhile; else: ?>  
    Sorry, I got nothing 
    <?php endif; ?>
    <ul id="previousPostNextPost">
        <?php echo get_next_posts_link('<li>Go Back!</li>'); ?>
        <?php echo get_previous_posts_link('<li>Go Forward!</li>'); ?>
    </ul>
    <div class="rootClearFloat"></div>
  </article>
</div> <!-- .amalgamatedWrapper -->


 <?php get_footer(); ?> 
