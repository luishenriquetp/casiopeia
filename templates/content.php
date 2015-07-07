<article <?php post_class(); ?>>
  <header>
  	<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  	<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );}; ?></a>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
  <div class="entry-date">
  	<?php get_template_part('templates/entry-meta'); ?>
  </div>
</article>
