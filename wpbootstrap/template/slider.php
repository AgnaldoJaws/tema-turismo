
   <!-- Ajax Jequery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css">
    @media (min-width:990px) and (max-width:2000px) {   
   
#imgSlider  img{   
margin-top: -30px;
}
.img-logo { 
width: 300px;
height: 170px;
}
.img-logo {  
margin-top: 7px;
margin-left: 7%;
}
.glyphicon-glyphicon {
  color: white;  
}
.title-slider {
  margin-top: -6px;
  margin-bottom: 45px;
}
}
@media (max-width: 768px) {
   
#imgSlider  img{
width: 100%;
height: 190px;   
margin-top: 50%;
 }

 .img-logo {    
height: auto;  
   } 

.glyphicon-glyphicon {
  margin-top: 50%;
  margin-bottom: -47%;
  color: #545454;
}
#resumoSlider > a > h1 {
  font-size: 22px;
}

    }  

  /*SLIDER*/

#slider {
  overflow: hidden; 
  
}

.img-logo {  
 position:absolute; 
 z-index: 2;
 }

.glyphicon-glyphicon {
font-size: 34px;
float: right;
padding-left: 25px;
}

.glyphicon-glyphicon:HOVER{
  color: #87aade;
}
#resumoSlider {
    color: #fff;
    cursor: default;
    transition: border-color 0.3s ease 0s, background 0.3s ease 0s;
    z-index: 1;
    margin-top: -100px;    
    margin-bottom: 5px;
    text-transform: uppercase;
}

/*FIM SLIDER*/




.box1 {
  width: 100%;
  height: 35px;
  

}
#slider {
  
  width: 100%;
  height: 500px;
}

</style>

<img alt="overlay 2" class="img-responsive img-logo"  src="http://www.onthebass.com.br/site-fernando/logo.png">



<div id="slider">

<div class="box1">


<a href="#" class="control_next "><span class="glyphicon glyphicon-glyphicon glyphicon-forward "></span></a>
  <a href="#" class="control_prev "><span class="glyphicon glyphicon-glyphicon glyphicon-backward"></span></a>
 
 </div>
   
  <ul>

        <?php
        $carouselPosts = new WP_Query();
        $carouselPosts->query('showposts=6');
        ?>
        <?php while ($carouselPosts->have_posts()) : $carouselPosts->the_post(); ?>

        <li id="imgSlider">
            <?php echo get_the_post_thumbnail(); ?></a>



            <div id="resumoSlider">
                <br>
              <a href="<?php echo get_permalink() ?>"class="link" style="color:white; text-decoration:none;   ">  <h1 class="text-center title-slider"><?php echo get_the_title() ?> </h1> </a> 
                
            </div>
            <br>
        </li>

        <?php endwhile; ?>

     </ul>

</div>


 <script type="text/javascript">

   $(document).ready(function ($) {

  setInterval(function () {
    moveRight();
}, 10000);

  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;

  $('#slider').css({ width: "", height: slideHeight });

  $('#slider ul').css({ width: "", marginLeft: ""});

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});
 </script>

