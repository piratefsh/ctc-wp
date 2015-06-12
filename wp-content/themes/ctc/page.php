<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
    <article class="uk-article uk-height-1-1">
		<h1 class="uk-article-title"> <?php the_title(); ?> </h1>
        <div class="uk-grid">
	        <?php if($post->post_content) :?>
	            <?php while ( have_posts() ) : the_post();?>
	                <?php the_content(); ?>
	            <?php endwhile; ?>
	        <?php endif;?>
        </div>
    </article>
</div>

<?php get_footer(); ?>
