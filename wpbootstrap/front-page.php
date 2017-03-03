<?php require_once 'template/headerHTML.php';?>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1833034076981096";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
<?php require_once 'template/slider.php';?>
<div class="parent">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php require_once 'template/Menu.php';?>
<?php require_once 'template/resumo.php';?>
<?php require_once 'template/post.php';?>
<?php require_once 'template/embarcacao.php';?>
<?php require_once 'template/contato.php';?>
<?php get_footer(); ?>
</body>
</html>
