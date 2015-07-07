<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', array( 'class' => 'img-responsive' ) );}; ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="entry-date">
    <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
