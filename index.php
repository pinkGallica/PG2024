<?php get_header(); ?>
<div class="grid"><!-- GRID START -->
<aside>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?></div>
            <?php endif; ?>
</aside>

<main class="h-entry">
        <?php $pcount = 0; while ( have_posts() ) : the_post();  ?>
        <?php if ($pcount++ == 0) : ?>
        <h2 id="post-<?php the_ID(); ?>"><a class="u-url" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
        <p class="small-text"><i class="fa-regular fa-calendar"></i> <?php the_date(); ?> <i class="fa-solid fa-tags"></i> <?php the_tags( '<span class= "tagged">', ' </span><span class= "tagged"> ', '</span>' ); ?></p>

        <div class="e-content"><?php the_content(); ?></div>

        <p><a href="" class="comments-link"><?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comments are off'); ?> <i class="fa-solid fa-comment"></i></a></p>
        </main>        
    	
<section class="old-posts">
<h3>Older Posts</h3>
    <?php else: ?>

        
                <div class="oldposts-item">
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <div class="featured-media"><a href="<?php the_permalink() ?>"><img src="<?php echo $image[0]; ?>" alt="" /></a></div>
                    <div class="oldposts-info"><h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_date(); ?></p></div>
                
                </div>         
            <?php endif; ?>
            <?php endwhile ?>
    <?php numeric_posts_nav(); ?>
    </section>         

<?php get_footer(); ?>