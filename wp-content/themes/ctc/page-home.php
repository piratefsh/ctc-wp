<?php /* Template Name: Home */?>

<?php get_header(); ?>

<?php get_template_part('partials/navigation'); ?>

<div class="jumbotron" data-uk-slideset="{default: 1, animation: 'slide-horizontal', duration: 500, autoplay: true, autoplayInterval: 6000}">
	<ul class="items uk-slideset" > 
		<?php foreach(get_banners() as $b): ?>
		<li>
			<div class="image" style="background-image:url(<?php echo $b['banner_photo']['url'];?>)"></div>
			    <div class="text"> 
					<div class="uk-container uk-container-center">
			      <div class="main">
			        <div class="input-wrapper">
			          <input value="<?php echo $b['banner_before_word'];?>" 
			          		data-text-before="<?php echo $b['banner_before_word'];?>" 
			          		data-text-after="<?php echo $b['banner_after_word'];?>" 
			          		type="text" class="animated"/>
			        </div><span><?php echo $b['banner_tagline'];?></span>
			      </div>
			      <div class="tagline hide"><?php echo $b['banner_subtagline'];?></div>
			    </div>
			</div>
		</li>
		<?php endforeach; ?>
	</ul>

	<ul class="indicators uk-slideset-nav uk-dotnav uk-dotnav-contrast uk-float-right"></ul>
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

<section class="uk-block-primary cta">
	<div class="uk-container-center uk-text-center uk-contrast">
		<h2>Let's get started, check out <br/>our camps and events</h2>
		<a class="uk-button uk-button-muted uk-button-large" href="/events">Let's go!</a>
	</div>
</section>

<?php get_footer(); ?>
