<?php get_header(); ?>
<?php get_sidebar(); ?>
 <article class="floatRight">

<h2>Where 404 Art Thou, Web Page?</h2>

Deny thy bookmark, and refuse thy URL;<br/>
Or, if thou wilt not, be but linked my home page,<br/>
And I’ll no longer be an error.<br/>


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