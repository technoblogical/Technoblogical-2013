 <?php get_header(); ?> 


<div class="amalgamatedWrapper">
    <article>
         <?php get_sidebar( $name ); ?> 
    <?php    
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br/></h2>
     <small><?php the_author_link(); ?> </small>
     <?php the_content(); ?>
     <div class="rootClearFloat"></div>
     <hr>
    <?php endwhile; else: ?>  
    Sorry, I got nothing 
    <?php endif; ?>
    </article>
</div> <!-- .amalgamatedWrapper -->


 <?php get_footer(); ?> 
