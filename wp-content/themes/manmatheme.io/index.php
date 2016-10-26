<?php get_header(); ?>
<section id="subpage" class="subpage">
  <div class="text-center text-shadow">
    <h3 class="subpage-title">BLOG</h3>
    <h5 class="subpage-subtitle">運営ブログ</h5>
  </div>
</section>
<section id="content" class="content section">
  <div class="container">
    <div class="row">
      <div class="col col-lg-9">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post">
          <div class="post-title">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          </div>
          <div class="post-date">
            <span class="post-month"><?php the_time('Y/m/j') ?></span>
          </div>
          <hr>
          <div class="entry">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
          </div>
          <span class="post-cat"><?php the_category(', ') ?></span>
        </div>
        <?php endwhile; ?>
        <div class="navigation">
            <span class="previous-entries"><?php next_posts_link('Older Entries') ?></span>
            <span class="next-entries"><?php previous_posts_link('Newer Entries') ?></span>
        </div>
        <?php else : ?>
        <h2>Not Found</h2>
        <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
      </div>
      <div class="col col-lg-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>