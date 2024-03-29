<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
	<div class="uk-grid">
	    <article class="uk-article uk-width-medium-2-3 uk-width-small-1-1">
	    <h1 class="uk-article-title"> <?php the_title(); ?> </h1>
	        <?php if($post->post_content) :?>
	            <?php while ( have_posts() ) : the_post();?>
	                <?php the_content(); ?>
	            <?php endwhile; ?>
	        <?php endif;?>
	    </article>
	    <aside class="uk-width-medium-1-3 uk-width-small-1-1">
		    <div class="uk-panel uk-panel-box">
		    	<h3> Sessions</h3>
		    	<?php if(!has_event_sessions()):?>
		    		Check back soon for new sessions.
		    	<?php endif;?>
		    	<?php foreach (get_event_sessions() as $session):?>
		    		<h4><?php echo $session['event_session_name'] ?></h4>
			    	<dl class="uk-description-list-line">
			    		<dt>
			    			Date
			    		</dt>
			    		<dd>
			    			<?php echo get_dates($session['event_session_start'], $session['event_session_end']);?>
			    		</dd>

			    		<dt>
			    			Time
			    		</dt>
			    		<dd>
			    			<?php echo $session['event_session_time'] ?>
			    		</dd>

			    		<dt>
			    			Venue
			    		</dt>
			    		<dd>
			    			<?php echo $session['event_session_venue'] ?>
			    		</dd>

			    		<dt>
			    			Level
			    		</dt>
			    		<dd>
			    			<?php echo $session['event_session_level'] ?>
			    		</dd>

			    		<dt>
			    			Ages
			    		</dt>
			    		<dd>
			    			<?php echo $session['event_session_age'] ?>
			    		</dd>
			    	</dl>
		    		<a class="uk-button uk-button-primary" href="<?php echo $session['event_session_link'] ?>" target="_blank">Get Tickets</a>

			    <?php endforeach;?>
	    	</div>
	    </aside>
    </div>
</div>

<?php get_footer(); ?>
