<?php get_header(); ?>
 <div id="primary" class="site-content">
 <?php if ( have_posts() ) : ?>
 <?php /* Start the Loop */ ?>
 <?php query_posts( 'post_type=booklist&posts_per_page=10' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
 <a href="<?php the_permalink(); ?>"></a><?php echo get_the_term_list( $post->ID, 'booklist_cat', 'Category: ','・','' ); ?>
 <?php get_template_part( 'content', 'page' ); ?>
 <?php endwhile; // end of the loop. ?>
 <!-- ページナビここから -->
<nav class="nav-single">
 <span class="nav-previous"> <?php previous_post_link('前の投稿', TRUE); ?><br/>
 <?php
 $prevPost = get_previous_post(true); //前の記事データを取得
 previous_post_link( '%link', $prevThumbnail.'%title' ); //出力
 ?></span>
 <span class="nav-next"><?php next_post_link('次の投稿', TRUE) ?><br/>
<?php
 $nextPost = get_next_post(true); //次の記事データを取得
 next_post_link( '%link', $nextThumbnail.'%title' ); //出力
 ?></span> </nav>
 <!-- ページナビここまで -->
 <?php endif; // end have_posts() check ?>
 </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>