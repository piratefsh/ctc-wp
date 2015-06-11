<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>
<div class="uk-container uk-container-center content">
	<div class="uk-grid">
	    <article class="uk-article uk-width-2-3 uk-panel uk-panel-box">
			<h1 class="uk-article-title"> <?php the_title(); ?> </h1>
	        <div>
		        <?php if($post->post_content) :?>
		            <?php while ( have_posts() ) : the_post();?>
		                <?php the_content(); ?>
		            <?php endwhile; ?>
		        <?php endif;?>
	        </div>
	    </article>
	    <aside class="uk-width-1-3 ">
		    <div class="uk-panel uk-panel-box">
		    	<dl class="uk-description-list-line">
		    		<dt>
		    			Date
		    		</dt>
		    		<dd>
		    			22 May 2015
		    		</dd>

		    		<dt>
		    			Time
		    		</dt>
		    		<dd>
		    			10am - 4pm
		    		</dd>
		    	</dl>
	    	</div>
	    </aside>
    </div>
</div>

<?php get_footer(); ?>
