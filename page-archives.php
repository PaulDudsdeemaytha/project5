<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="quote-icon">
		<i class="fas fa-quote-left" style="color:#00cc00"></i>
        </div>
        

		<section class="browse-archives content">
            <header class-"entry-header">
                <h1><?php echo get_the_title();?></h1>
            </header>

            <div class="post-archives">
                <h2>Quote Authors</h1>
                <ul>
                    <?php
                        $posts = get_posts('posts_per_page=-1');
                        foreach( $posts as $post ) : setup_postdata($post);
                    ?>
                    <li>
                        <a href="<?php the_permalink()?>">
                        <?php echo get_the_title()?>
                        </a>
                    </li>
                    <?php endforeach; wp_reset_postdata() ?>
                </ul>
             </div>

            <div class="category-archives">
                <h2>Categories</h2>
                <ul>
                    <?php wp_list_categories( 'title_li=' ); ?>
                </ul>
            </div>

            <div class="tag-archives">
                <h2>Tags</h2>
                <ul>
                    <?php wp_tag_cloud(
                        array(
                            'smallest' => 1,
                            'largest' => 2,
                            'unit' => 'rem',
                            'format' => 'list'
                        )
                    ); ?>
                </ul>

            </div>




        </section>
        <div class="quote-icon">
		<i class="fas fa-quote-right" style="color:#00cc00"></i>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
