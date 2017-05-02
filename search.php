<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationTheme
 * @since FoundationTheme 1.0.0
 */

get_header(); ?>

<div id="page" role="main">

<?php do_action( 'foundationtheme_before_content' ); ?>

<article <?php post_class('main-content') ?> id="search-results">
	<header>
	    <h1 class="entry-title"><?php _e( 'Search Results for', 'foundationtheme' ); ?> "<?php echo get_search_query(); ?>"</h1>
	</header>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	<?php do_action( 'foundationtheme_before_pagination' ); ?>

	<?php
	if ( function_exists( 'foundationtheme_pagination' ) ) :
		foundationtheme_pagination();
	elseif ( is_paged() ) :
	?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationtheme' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationtheme' ) ); ?></div>
		</nav>
	<?php endif; ?>

</article>

<?php do_action( 'foundationtheme_after_content' ); ?>
<?php get_sidebar(); ?>

</div>

<?php get_footer();
