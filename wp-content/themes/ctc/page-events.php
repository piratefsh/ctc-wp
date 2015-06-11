<?php /* Template Name: Events */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
  <div class="uk-grid">
      <div class="uk-width-1-1"><h1 class="margin-bottom"> <?php the_title(); ?> </h1></div>
      <article class="uk-article uk-width-3-4">
        <div class="uk-grid uk-grid-medium">
        <?php get_posts_of_type_query('event', 9);?>
        <?php if(have_posts()):?>
            <?php while (have_posts()) : the_post();?>
              <div class="uk-width-1-2">
                <div class="uk-panel uk-panel-box panel-event">
                  <h3 class="uk-panel-title"><?php the_title();?></h3>
                  <?php echo get_the_date();?></h4>
                  <p><a class="uk-button" href="<?php the_permalink();?>">Details</a></p>
                </div>
              </div>
            <?php endwhile; ?>
          <div class="pagination">
            <?php get_listing_pagination(); ?>
          </div>
            <?php wp_reset_postdata(); ?>
        <?php endif;?>
        </div>
      </article>
      <aside class="uk-width-1-4">
        <div class="uk-panel uk-panel-box uk-panel-box-primary">
          <h3 class="uk-panel-title">Filter Events</h3>
        </div>
      </aside>
    </div>
</div>

<?php get_footer(); ?>
