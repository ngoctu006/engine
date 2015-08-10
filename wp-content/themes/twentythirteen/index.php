<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
                    <h1 class="description"><?php _e('L’Atelier de l’Art et du Média') ?></h1>
                    <div class="wrap-logo">
                        <a class="click-ajax" href="#">
                            <div class="button-start-engine logo-home"></div>
                        </a>
                    </div>
                    <div class="creatives">
                        <div class="smoke"></div>
                    </div>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
