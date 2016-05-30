<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="">

    <section id="searchResult">

        <h1 class="search-title">Searching for: <?php the_search_query(); ?> - <?php echo $wp_query->found_posts; ?> <?php _e( 'Result(s) Found', 'locale' ); ?></h1>
    </section>

    <div id="searchList">
    
        <?php while ( have_posts() ) : the_post() ?>

        <article>
            <?php 
                // check if post has a Thumbnail assigned to it.
                if ( has_post_thumbnail() ) {
                    echo '<div class="thumbnail"><a href="' . get_permalink($post->post_parent) . '"><p>';
                    the_post_thumbnail();
                    echo '</a></p></div>';
                }else {
                    echo '';
                }
            ?>
            
            <div class="content">
                <h3>
                    <a href="<?php echo get_permalink($post->post_parent) ?>"><?php the_title(); ?></a>
                </h3>
                <h4><?php the_time('F j, Y'); ?></h4>
                <hr>
                <?php the_excerpt(); ?>
            </div>
        </article>

        <?php endwhile; ?>

    </div>

    <section id="paged">
        <p>
            <?php
                //display Page x of y pages
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                echo 'Page ' . $paged . ' of ' . $wp_query->max_num_pages;
            ?>
        </p>

            <?php next_posts_link('<img src="' . get_template_directory_uri(). '/img/next.png" />'); ?>
            <?php previous_posts_link('<img src="' . get_template_directory_uri(). '/img/prev.png" />'); ?>
            
    </section>

</div>

<a href="#0" class="cd-top">Top</a>

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backtotop.js"></script>