<?php
  /**
   * The main template file
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * For example, it puts together the home page when no home.php file exists.
   *
   * @link http://codex.wordpress.org/Template_Hierarchy
   *
   * @package WordPress
   * @subpackage Twenty_Twelve
   * @since Twenty Twelve 1.0
   */
  
  get_header(); ?>

<div id="slideshow-area">
  <?php do_action('slideshow_deploy', '19'); ?>
</div>

<div id="primary" class="site-content">
  <div id="welcome">
    <h2>UNICSとは</h2>
    <img src="http://dummyimage.com/100">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      aliquip ex ea commodo consequat. Duis aute irure dolor in
      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
      culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <h2>一緒に作品を作りませんか？</h2>
    <img src="http://dummyimage.com/100">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut
      aliquip ex ea commodo consequat. Duis aute irure dolor in
      reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
      culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div style="clear: left;"></div>
  </div>
  
  <div id="content" role="main">
    
    <div id="news-list" class="entries">
      <h3><a href="<?php echo get_category_link(get_category_by_slug('news')->term_id); ?>">最近の更新情報</a></h3>
      <table>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php if (in_category('news')) { ?> <!-- カテゴリ 'news' だけ表示 -->
        <tr>
          <td><?php the_date(); ?></td> <!-- 投稿日 -->
          <td class="eyecatch-thumb"><?php the_post_thumbnail(array(50,50)); ?></td>
          <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td> <!-- タイトルとリンク -->
        </tr>
        <?php } ?>
        <?php endwhile; ?>
      </table>
    </div>
    
    <div id="post-list" class="entries">
      <h3><a href="<?php echo get_category_link(get_category_by_slug('post')->term_id); ?>">最新記事</a></h3>
      <table>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php if (in_category('post')) { ?> <!-- カテゴリ 'post' だけ表示 -->
        <tr>
          <td><?php the_date(); ?></td> <!-- 投稿日 -->
          <td class="eyecatch-thumb"><?php the_post_thumbnail(array(50,50)); ?></td>
          <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td> <!-- タイトルとリンク -->
        </tr>
        <?php } ?>
        <?php endwhile; ?>
      </table>
    </div>
    
    <div id="event-list" class="entries">
      <h3><a href="<?php echo get_category_link(get_category_by_slug('event')->term_id) ?>">イベント</a></h3>
      <table>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php if (in_category('event')) { ?> <!-- カテゴリ 'post' だけ表示 -->
        <tr>
          <td><?php the_date(); ?></td> <!-- 投稿日 -->
          <td class="eyecatch-thumb"><?php the_post_thumbnail(array(50,50)); ?></td>
          <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td> <!-- タイトルとリンク -->
        </tr>
        <?php } ?>
        <?php endwhile; ?>
      </table>
    </div>
    
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?><?php
