<?php /* Template Name: Events */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
  <div class="uk-grid">
      <div class="uk-width-1-1"><h1 class="margin-bottom"> <?php the_title(); ?> </h1></div>
      <article class="uk-article uk-width-medium-3-4 uk-width-small-1-1">
        <?php echo do_shortcode('[events-featured]'); ?>
      </article>
      <aside class="uk-width-medium-1-4 uk-width-small-1-1">
        <div class="uk-panel uk-panel-box uk-panel-box-primary">
          <h4 class="uk-panel-title">Search</h4>
        </div>
      </aside>
    </div>
</div>

<?php get_footer(); ?>
