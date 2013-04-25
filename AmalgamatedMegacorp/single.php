 <?php get_header(); ?> 


<div class="amalgamatedWrapper">
     <?php get_sidebar( $name ); ?> 
    <article>
         <?php get_sidebar( $name ); ?> 
    <?php  
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/></h2>
     <small><?php the_author_link(); ?> </small>
     <?php the_content(); ?>
     <ul id="previousPostNextPost">
      <?php previous_post_link('%link','<li>Go Back!</li>'); ?>
      <?php next_post_link('%link','<li>Go Forward!</li>'); ?>
     </ul>
     <div class="rootClearFloat"></div>
     <hr>
    <?php endwhile; else: ?>  
    Sorry, I got nothing 
    <?php endif; ?>
    </article>
</div> <!-- .amalgamatedWrapper -->


 <?php get_footer(); ?> 
