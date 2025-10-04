<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('mb-8'); ?>>
        <h2 class="text-2xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="text-gray-700">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
  <?php else: ?>
    <p><?php _e('هیچ محتوایی پیدا نشد.', 'my-simple-tailwind'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
