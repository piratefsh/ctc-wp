<?php /* Template Name: Home */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>

<div class="jumbotron">
	<ul class="items"> 
	  <li>
	    <div class="image"></div>
		    <div class="text"> 
	    		<div class="uk-container uk-container-center">
		      <div class="main">
		        <div class="input-wrapper">
		          <input value="" type="text" class="animated"/>
		        </div><span>a game</span>
		      </div>
		      <div class="tagline hide">Challenge your mind to design, create, and build. </div>
		    </div>
	    </div>
	  </li>
	</ul>
</div>

<div class="uk-container-center content home">
    <article class="uk-article">
        <?php if($post->post_content) :?>
            <?php while ( have_posts() ) : the_post();?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif;?>
    </article>
</div>

<?php get_footer(); ?>
