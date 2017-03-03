<style>
<style>
    @media (max-width: 600px) {
        


        /*Fim navegador principal*/
    }

    @media (min-width:600px) and (max-width:768px) {
       


    }

    @media (min-width:990px) and (max-width:2000px) {
        
      .navbar {
  margin-left: 7%;
  margin-right: 7%;
  margin-top: -10px;
}
.img-logo {
  width: 30%;
  margin-left: 7%;
 
}
    }
    




 




    /*NAVEGADOR*/
.navbar-default {
    background-color: #87aade;
    border-color: #87aade;
}

  
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:HOVER {
    background:white;
    color: #87aade;
  }

 .navbar-default .navbar-nav .open .dropdown-menu>li>a {
  text-align: center;
  color: white;
  font-size: 18px;
 }
.navbar-default .navbar-nav>li>a
 {
  text-align: center;
  color: white;
  font-size: 18px;
 }
  
  .navbar-default .navbar-nav>.active>a {
    background:white;
    color: #87aade;
  }

  .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
    color: #87aade;
    background-color:white;
}


.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover {
    color: #87aade;
    background-color: white;
}

.navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #87aade;
}

.navbar {
    border-radius: -2px;
}
.navbar {
    border-radius: 0px;
}
  /*FIM NAVEGADOR*/

  /*LOGO*/
 
  







</style>

  </head>
  <body>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <img alt="overlay 2" class="img-responsive img-logo"  src="http://www.onthebass.com.br/site-fernando/logo.png">

<br>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>    
</nav>

