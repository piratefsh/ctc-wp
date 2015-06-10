<?php get_header(); ?>

<div class="content">
    <article class="page">
        <?php if($post->post_content) :?>
            <?php while ( have_posts() ) : the_post();?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif;?>
    </article>
</div>

<?php get_footer(); ?>
