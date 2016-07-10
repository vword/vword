<?php get_header(); ?>
 <?php 
 if (have_posts())
 {
     while(have_posts())
     {
         the_post();?>
         <B><?php the_title();?></B>
         <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small>
         <small><i><?php the_category(); ?></i></small>
         <p><?php the_content();?></p>
         <hr/>
     <?php 
     
     }
 }
 ?>
<?php get_footer(); ?>
