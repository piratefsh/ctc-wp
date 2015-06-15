<div class="uk-grid uk-grid-medium">
  <?php $events = get_posts_of_type('event', 4);?>
  <?php if($events->have_posts()):?>
      <?php while ($events->have_posts()) : $events->the_post();?>
        <div class="uk-width-medium-1-2 uk-width-small-1-2">
          <div class="uk-panel uk-panel-box panel-event">
            <h3 class="uk-panel-title"><a  href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <div class="uk-text-muted">
              <?php foreach (get_event_sessions() as $session):?>
                <?php echo get_dates($session['event_session_start'], $session['event_session_end']);?><br/>
              <?php endforeach; ?>
            </div>
            <p><a class="uk-button" href="<?php the_permalink();?>">Details</a></p>
          </div>
        </div>
      <?php endwhile; ?>
    <div class="pagination">
      <?php get_listing_pagination(); ?>
    </div>
  <?php endif;?>
  <?php wp_reset_postdata(); ?>
</div>