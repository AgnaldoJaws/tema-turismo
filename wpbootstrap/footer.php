<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->
<footer class="blog-footer">
  <p class="text-center">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p class="text-center">
    <a  href="#">Back to top</a>
  </p>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



</body>
</html>
