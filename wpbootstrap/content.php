<style>
    .panel-default h3 a{
        color: #410f70;
        text-decoration:none;
    }
    .panel-default .btn {
        width: 100%;
        margin-left: 0%;
    }
    .link-title{
        color: #3c763d;
    }
    .widgets {
    box-shadow: 2px 2px 2px 2px #888888;
    background-color: white; 
    font-size: 20px;
    color: #333333;   
    margin-bottom: 2%;
}
 .widgets ul li a{
    text-decoration:none;
    color:black; 
}
.uper {
margin-top: -3%;
}
#lineDowPost {
background-color:#e77723;
height:10px;
}
@media (min-width:990px) and (max-width:2000px) {  
.img-content {
  width: 30%;
  margin-left: 7%;
 
}
}
</style>


 <?php require_once 'template/menu2.php';?>   


<div class="container-fluid">
    <div class="row">
          <div class="col-md-12">
              <div class="panel panel-default">
                   <?php if(is_single()) : ?>
     <h1> <?php the_title(); ?> </h1>
    <?php else : ?>
      <a href="<?php the_permalink(); ?>">
        <h1> <?php the_title(); ?> </h1>
      </a>
    <?php endif; ?>
  </h2>
  <p class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
     by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
       <?php the_author(); ?>
     </a>
  </p>
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <h4 class="text-justify"><?php the_content(); ?> </h4>
  <?php else : ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    
  <?php endif; ?>   
 
               </div>
          </div>

          </div>
          </div>
          
