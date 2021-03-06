<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-sm-10 offset-sm-1">
			<div class="article-wrapper">
				<?php the_title( '<h1 class="header-page">', '</h1>' ); ?>
				<?php twentyseventeen_edit_link( get_the_ID() ); ?>
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
						'after'  => '</div>',
					) );
				?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
