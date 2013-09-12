<!DOCTYPE html>
<html>
	<head>
		<title><?=isset($title) ? $title : "DFitz"?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="google-site-verification" content="YK9psI-H6MAzrHBAeXQR1F2x6BFJlKj4K3lItM_caNs" />

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-37451314-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			 })();
		 </script>
		 <!-- I hope no one hacks this CDN -->
		 <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css'></link>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		 <script src='//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'></script>
		 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		 <!--[if lt IE 9]>
		 <script src="../../assets/js/html5shiv.js"></script>
		 <script src="../../assets/js/respond.min.js"></script>
		 <![endif]-->
	 </head>
	 <body>
		 <header>
		 <div class='container'>
			 <nav class="navbar navbar-default" role="navigation">
			 <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" href="#">DFitz</a>
			 </div>

			 <!-- Collect the nav links, forms, and other content for toggling -->
			 <div class="collapse navbar-collapse navbar-ex1-collapse">
				 <ul class="nav navbar-nav">
					 <li class="active"><a href="#">1</a></li>
				 </ul>
				 <form class="navbar-form navbar-left" role="search">
					 <div style='max-width:300px;' class="input-group">
						 <input id='search-term' type="text" class="form-control" style='text-align:center;' placeholder="^_^">
						 <span class='input-group-btn'>
							 <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						 </span> 
					 </div>
				 </form>
				 <ul class="nav navbar-nav navbar-right">
					 <li><a href="#">2</a></li>
					 <li><a href="#">3</a></li>
				 </ul>
			 </div><!-- /.navbar-collapse -->
			 </nav>
		 </div>
		 </header>

