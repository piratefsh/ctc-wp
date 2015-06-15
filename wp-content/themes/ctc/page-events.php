<?php /* Template Name: Events */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
  <div class="uk-grid uk-grid-medium">
      <div class="uk-width-1-1"><h1 class="margin-bottom"> <?php the_title(); ?> </h1></div>
      <article class="uk-article uk-width-medium-3-4 uk-width-small-1-1">
        <?php echo do_shortcode('[events-featured]'); ?>
      </article>
      <aside class="uk-width-medium-1-4 uk-width-small-1-1">
        <div class="uk-panel uk-panel-box uk-panel-box-secondary">
          <h4 class="uk-panel-title">Search</h4>
          <form class="uk-form">
          <h5>Keyword</h5>
            <div class="uk-form-row" data-uk-margin>
              <input type="text" placeholder="Search term"/>
            </div>

            <h5>Tracks</h5>
            <div class="uk-form-row" data-uk-margin>
              <label><input type="checkbox"/> Coding</label><br/>
              <label><input type="checkbox"/> Minecraft</label><br/>
              <label><input type="checkbox"/> Games</label><br/>
              <label><input type="checkbox"/> Design</label>
            </div>

            <h5>Age Groups</h5>
            <div class="uk-form-row" data-uk-margin>
              <label><input type="checkbox"/> 8 - 10</label><br/>
              <label><input type="checkbox"/> 11- 13</label><br/>
              <label><input type="checkbox"/> 14 - 16</label><br/>
            </div>
            <div class="uk-form-row" data-uk-margin>
              <input type="submit" val="Search" class="uk-button uk-button-primary "/>
            </div>
          </form>
        </div>
      </aside>
    </div>
</div>

<?php get_footer(); ?>
