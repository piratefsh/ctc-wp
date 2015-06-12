<div data-uk-slideset="{default: 2, animation: 'fade', duration: 400, autoplay: true}">
  <ul class="uk-grid uk-slideset testimonials">
  <?php foreach(get_testimonials() as $t): ?>
    <!-- set items -->
    <li class="uk-comment">
      <div class="uk-comment-header">
        <img class="uk-comment-avatar comment-avatar-testimonial" src="<?php echo $t['testimonial_photo']['url'];?>"/>
        <div class="uk-comment-title">
          <?php echo $t['testimonial_name'] ?>
        </div>
        <div class="uk-comment-meta">
          <?php echo $t['testimonial_background'] ?>
        </div>
      </div>
      <div class="uk-comment-body">"<?php echo $t['testimonial_quote'] ?>"</div>
    </li>
  <?php endforeach;?>
  </ul>
  
  <!-- indicators -->
  <ul class="uk-dotnav uk-slideset-nav uk-flex-center">
    <?php $counter = 0;?>
    <?php foreach(get_testimonials() as $t): ?>
      <?php $counter++;?>
      <li>
        <a href="#item<?php echo $counter;?>"><?php echo $t['testimonial_name'];?></a>
      </li>
    <?php endforeach;?>
  </ul>
</div>

