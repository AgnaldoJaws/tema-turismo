<?php get_header(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <div class="row">
      
        <div class="col-sm-12 blog-main">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content',get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->
    <?php get_footer(); ?>
