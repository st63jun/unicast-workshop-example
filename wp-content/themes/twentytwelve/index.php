<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
    	    	<?php do_action('slideshow_deploy', '19'); ?>
        <div class="entries">
       <h3>最近の更新情報</h3>
       <table>
		<?php while ( have_posts() ) : the_post(); ?>
    <?php if (in_category('news')) { ?>
	      <tr><td><?php the_date(); ?></td><td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td></tr>
<?php } ?>
		<?php endwhile; ?>
	</table>
	</div>

    <div class="entries">
       <h3>最新記事</h3>
       <table>
		<?php while ( have_posts() ) : the_post(); ?>
<?php if (in_category('post')) { ?>
		      <tr><td><?php the_date(); ?></td><td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td></tr>
<?php } ?>
		<?php endwhile; ?>
	</table>
	</div>

                       <div class="entries">
       <h3>イベント</h3>
       <table>
		<?php while ( have_posts() ) : the_post(); ?>
<?php if (in_category('event')) { ?>
		      <tr><td><?php the_date(); ?></td><td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></td></tr>
<?php } ?>
		<?php endwhile; ?>
	</table>
	</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>