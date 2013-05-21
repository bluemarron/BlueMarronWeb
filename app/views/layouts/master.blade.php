<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BlueMarron</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?
		echo Html::style('assets/css/bootstrap.css');
		?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <?
		echo Html::style('assets/css/bootstrap-responsive.css');
		echo Html::style('assets/css/prettify.css');
		echo Html::script('assets/js/prettify.js');
		?>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <?
		echo Html::script('assets/js/html5shiv.js');
		?>
    <![endif]-->
  </head>
  <body onload="prettyPrint()">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">BlueMarron</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <!--Logged in as <a href="#" class="navbar-link">Username</a>-->
            </p>
            <ul class="nav">
              <li <?if(!strncmp($path, 'php/', strlen('php/'))){?>class="active"<?}?>><a href="/l4/public/php">PHP</a></li>
              <li <?if(!strncmp($path, 'about/', strlen('about/'))){?>class="active"<?}?>><a href="/l4/public/about">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">

							<?if(!strncmp($path, 'php/', strlen('php/'))){?>
	              <li class="nav-header">PHP</li>
								<li <?if($path=="php/install"){?>class="active"<?}?>><a href="/l4/public/php/install">설치</a></li>
	              <li <?if($path=="php/basic_structure"){?>class="active"<?}?>><a href="/l4/public/php/basic_structure">기본구조</a></li>
              <?}?>
							<?if(!strncmp($path, 'about/', strlen('about/'))){?>
	              <li class="nav-header">About</li>
	              <li <?if($path=="about/introduction"){?>class="active"<?}?>><a href="/l4/public/about/introduction">Introduction</a></li>
	              <li <?if($path=="about/contact"){?>class="active"<?}?>><a href="/l4/public/about/contact">Contact</a></li>
							<?}?>
              <!--
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            	-->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
 					@yield('content')
				</div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; BlueMarron 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Placed at the end of the document so the pages load faster -->
    <?
		echo Html::script('assets/js/jquery.js');
		echo Html::script('assets/js/bootstrap-transition.js');
		echo Html::script('assets/js/bootstrap-alert.js');
		echo Html::script('assets/js/bootstrap-modal.js');
		echo Html::script('assets/js/bootstrap-dropdown.js');
		echo Html::script('assets/js/bootstrap-scrollspy.js');
		echo Html::script('assets/js/bootstrap-tab.js');
		echo Html::script('assets/js/bootstrap-tooltip.js');
		echo Html::script('assets/js/bootstrap-popover.js');
		echo Html::script('assets/js/bootstrap-button.js');
		echo Html::script('assets/js/bootstrap-collapse.js');
		echo Html::script('assets/js/bootstrap-carousel.js');
		echo Html::script('assets/js/bootstrap-typeahead.js');
		?>
  </body>
</html>