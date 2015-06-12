<?php /* Template Name: Events */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
  <div class="uk-grid">
      <div class="uk-width-1-1"><h1 class="margin-bottom"> <?php the_title(); ?> </h1></div>
      <article class="uk-article uk-width-3-4">
        <?php echo do_shortcode('[events-featured]'); ?>
      </article>
      <aside class="uk-width-1-4">
        <div class="uk-panel uk-panel-box uk-panel-box-primary">
          <h3 class="uk-panel-title">Filter Events</h3>
        </div>
      </aside>
    </div>
</div>

<?php get_footer(); ?>
