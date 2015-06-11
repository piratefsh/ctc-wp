<?php /* Template Name: Events */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
  <div class="uk-grid">
      <article class="uk-article uk-width-2-3 uk-panel uk-panel-box">
      <h1 class="uk-article-title"> <?php the_title(); ?> </h1>
          <div class="uk-grid">
            <?php get_posts_of_type_query('event', 9);?>
            <?php if(have_posts()):?>
                <?php while (have_posts()) : the_post();?>
                  <div class="uk-width-1-2">
                    <h4><?php echo get_the_date();?></h4>
                    <?php the_title();?>
                    <p><a class="small-link" href="<?php the_permalink();?>">Read more  <i class="fa fa-angle-right"></i></a></p>
                  </div>
                <?php endwhile; ?>
              <div class="pagination">
                <?php get_listing_pagination(); ?>
              </div>
                <?php wp_reset_postdata(); ?>
            <?php endif;?>
            </div>
      </article>
    </div>
</div>

<?php get_footer(); ?>
