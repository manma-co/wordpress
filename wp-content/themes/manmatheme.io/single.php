<?php get_header();?>
<section id="subpage" class="subpage">
  <div class="text-center text-shadow">
    <h3 class="subpage-title">BLOG</h3>
    <h5 class="subpage-subtitle">運営ブログ</h5>
  </div>
</section>
<!-- Contents -->
<section id="contents" class="contents section">
  <div class="container">
    <div class="row">
      <div class="col col-lg-8">
        <div id="main">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <div class="post">
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="blog_info"><?php the_time('Y/m/j') ?></div>
              <ul>
                <li class="cat"><?php the_category(', ') ?></li>
                <li class="tag"><?php the_tags('', ', '); ?></li>
              </ul>
              <br class="clear" />
            </div>
            <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
            <?php the_content(); ?>
          </div><!-- /.post -->
          <?php endwhile; ?>
          <div class="blog_info"><?php the_time('Y/m/j') ?>
            <ul>
              <li class="cat"><?php the_category(', ') ?></li>
              <li class="tag"><?php the_tags('', ', '); ?></li>
            </ul>
          <div class="nav-below">
            <span class="nav-previous"><?php previous_post_link('%link', '古い記事へ'); ?></span>
            <span class="nav-next"><?php next_post_link('%link', '新しい記事へ'); ?></span>
          </div><!-- /.nav-below -->
          <!-- Commetns -->
          <?php comments_template(); ?>
          <?php else : ?>
          <h2 class="title">記事が見つかりませんでした。</h2>
          <p>検索で見つかるかもしれません。</p><br />
          <?php get_search_form(); ?>
          <?php endif; ?>
        </div><!-- /#main -->
      </div>
      <div class="col col-lg-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>