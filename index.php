<?php



?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Maestro is a free testing system which allows to run programming contests (ICPC style) and programming courses." />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" href="/assets/img/favicon.png" />

  <title>Main page - Maestro Testing System</title>

  <!-- Bootstrap core CSS -->
  <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs" href="#">
          <i class="fa fa-share-square-o fa-fw"></i> Maestro Testing System
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/index.php"><i class="fa fa-home fa-fw"></i> Main page</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Selected contest: V LO 2015/16, 1e <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">Current contest:</li>
              <li><a href="/members.php?contest=3180288"><i class="fa fa-group fa-fw"></i> Show members</a></li>
              <li><a href="/manage.php?contest=3180288"><i class="fa fa-check-square-o fa-fw"></i> Manage problems</a></li>
              <li><a href="/edit.php?contest=3180288"><i class="fa fa-pencil fa-fw"></i> Edit contest</a></li>
              <li><a href="/delete.php?contest=3180288"><i class="fa fa-times fa-fw"></i> Remove contest</a></li>
              <li><a href="/leave.php?contest=3180288"><i class="fa fa-sign-out fa-fw"></i> Leave contest</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Joined contests:</li>
              <li><a href="/select.php?contest=3180288">V LO 2015/16, 1e</a></li>
              <li><a href="/select.php?contest=1870276">Warsztaty V LO - Zawody stałe</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Other contests:</li>
              <li><a href="/select.php?contest=251519">Maestro Playground</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/contests.php"><i class="fa fa-list fa-fw"></i> Browse contests</a></li>
              <li><a href="/create.php"><i class="fa fa-plus fa-fw"></i> Add a new contest</a></li>
            </ul>
          </li>
          <li role="seperator" class="navbar-divider"></li>
          <li><a href="/overview.php?contest=3180288"><i class="fa fa-rocket fa-fw"></i> Overview</a></li>
          <li><a href="/problems.php?contest=3180288"><i class="fa fa-puzzle-piece fa-fw"></i> Problems</a></li>
          <li><a href="/submit.php?contest=3180288"><i class="fa fa-upload fa-fw"></i> Submit</a></li>
          <li><a href="/results.php?contest=3180288"><i class="fa fa-tasks fa-fw"></i> Results</a></li>
          <li><a href="/ranking.php?contest=3180288"><i class="fa fa-trophy fa-fw"></i> Ranking</a></li>
          <li role="separator" class="navbar-divider visible-xs"></li>
          <li class="visible-xs"><a href="/login.php"><i class="fa fa-user fa-fw"></i> Login</a></li>
          <li class="visible-xs"><a href="/register.php"><i class="fa fa-sign-in fa-fw"></i> Register</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="/login.php"><i class="fa fa-user fa-fw"></i> Login</a></li>
					<li><a href="/register.php"><i class="fa fa-sign-in fa-fw"></i> Register</a></li>
				</ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="row">
  				<div class="col-md-4">
  					<div class="list-group">
  						<a href="#" class="list-group-item active">Home</a>
              <div class="list-group-item">
                List header
    					</div>
    					<div class="list-group-item">
                <h4 class="list-group-item-heading">
    							List group item heading
    						</h4>
    						<p class="list-group-item-text">
    							...
    						</p>
    					</div>
    					<div class="list-group-item">
    						<span class="badge">14</span>Help
    					</div> <a class="list-group-item active"><span class="badge">14</span>Help</a>
    				</div>
    			</div>
    			<div class="col-md-8">
    				<div class="page-header">
    					<h1>
    						Welcome to Maestro
    					</h1>
    				</div>
    				<div class="panel panel-default">
    					<div class="panel-heading">
    						<h3 class="panel-title">
    							Panel title
    						</h3>
    					</div>
    					<div class="panel-body">
    						Panel content
    					</div>
    					<div class="panel-footer">
    						Panel footer
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <ul class="list-inline">
        <li><a href="//facebook.com/codebucketdev" style="text-decoration: none"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
        <li><a href="//twitter.com/codebucketdev" style="text-decoration: none"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
        <li><a href="//github.com/codebucketdev" style="text-decoration: none"><i class="fa fa-github fa-fw"></i> GitHub</a></li>
        <li class="pull-right" style="color: grey;">Made with <i class="fa fa-heart fa-fw"></i> by Codebucket. Theme by <a href="//bootswatch.com" target="_blank">Bootswatch</a>.</li>
      </ul>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
