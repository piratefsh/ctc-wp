<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center uk-grid ">
    <article class="uk-width-4-5">
		<h1> <?php the_title(); ?> </h1>
        <?php if($post->post_content) :?>
            <?php while ( have_posts() ) : the_post();?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif;?>
    </article>
</div>

<?php get_footer(); ?>
