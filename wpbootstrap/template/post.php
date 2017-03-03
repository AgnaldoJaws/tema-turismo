

<style>
    .hr {
        background-color:  #87aade;
        height: 2px;
    }
    .panel > h2 > a{
        text-decoration:none; 
        text-transform: uppercase;
    }
    .title-post > a{
        text-decoration:none; 
        text-transform: uppercase;
    }

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php
            //for each category, show all posts
            $cat_args = array(
                'orderby' => 'name',
                'order' => 'DESC'
            ); ?>

            <?php $categories = get_categories($cat_args); ?>

            <?php  foreach($categories as $category): ?>
                <?php    $args = array(
                    'showposts' => 6,
                    'category__in' => array($category->term_id),
                    'caller_get_posts'=> 1
                ); ?>

                <?php  $posts=get_posts($args); ?>

                <?php if ($posts): ?>

                    <div class="panel panel-default ">
                        <?php  echo '<h2 class="text-left">&nbsp&nbsp<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> '; ?>
                        <hr class="hr">

                        <?php   foreach($posts as $post): ?>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <?php    setup_postdata($post); ?>
                                    <?php echo the_post_thumbnail(array(700,700)); ?>
                                    <li class="text-center"><h3 class="title-post"><a class="link-title" href=" <?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link to '. the_title_attribute('echo=0') . '"> <?php echo get_the_title() ?>  </a></h3></li>

                                    <li class="text-justify"><?php echo the_excerpt(); ?></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn btn-primary" role="button" >CONTINUAR LENDO</a></li>
                                </div>
                                
                            </div>

                        <?php endforeach; ?>

                        <div class="panel-body">
                        </div>
                        
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
       
    </div>

</div>

