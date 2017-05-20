<?header( "refresh:5;url= https://mrpersonaldash.herokuapp.com" );
shell_exec('ruby ruby/imgur-cat.rb;ruby ruby/imgur-dog.rb;ruby ruby/imgur-pun.rb;ruby ruby/imgur-meme.rb;ruby ruby/rubists-online-reddit.rb;');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daily Overview</title>
		<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Exo+2" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
	</head>

	<body>
		<div class="jumbotron">
			<h2 class="text-center">Personal Dash</h2>
		</div>
		<div class="container">
			

			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default icon-panel">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Current Time</h2>
						</div>
						<div id="time-container" class="panel-body">
							<div class="col-md-3"><div class="glyphicon glyphicon-time"></div></div>
							<div class="col-md-9" id="time"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default icon-panel-tabs">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Temperature</h2>
						</div>
						<div class="tab-content">
							<div id="sta-temp" class="tab-pane fade in active">	
								<div id="temperature-container" class="panel-body">
									<div class="col-md-3"><div class="glyphicon glyphicon-cloud"></div></div>
									<div class="col-md-9"><div id="temp"></div><div class="mini-subtitle">St. Augustine</div></div>
								</div>
							</div>
							<div id="jax-temp" class="tab-pane fade">
								<div id="temperature-container" class="panel-body">
									<div class="col-md-3"><div class="glyphicon glyphicon-cloud"></div></div>
									<div class="col-md-9"><div id="tempjax"></div><div class="mini-subtitle">Jacksonville</div></div>
								</div>
							</div>
						</div>
						<div class="temp-tabs tab-controller">
							<ul class="nav nav-pills">
								<li class="tab-btn active">
									<a data-toggle="tab" href="#sta-temp"></a>
								</li>
								<li class="tab-btn">
									<a data-toggle="tab" href="#jax-temp"></a>
								</li>
							</ul>
						</div>
						
					</div>
				</div>

				<div class="col-md-3">
					<div class="panel panel-default icon-panel">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Ruby Coders On Reddit</h2>
						</div>
						<div class="panel-body">
							<div class="col-md-3"><div class="glyphicon glyphicon-scale"></div></div>
							<div class="col-md-9">
								<div id="ruby-online"></div>
								<div class="mini-subtitle">coders are currently browsing the Ruby subreddit.</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="panel panel-default icon-panel">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Ruby Subreddit Subscribers</h2>
						</div>
						<div class="panel-body">
							<div class="col-md-3"><div class="glyphicon glyphicon-stats"></div></div>
							<div class="col-md-9">
								<div id="ruby-subscribers"></div>
								<div class="mini-subtitle">coders are currently subscribed to the Ruby subreddit.</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Today's Cat</h2>
						</div>
						<div class="panel-body">
							<div class="imgur" id="cat"><img src="http://railaware.com/dash/images/cat_image.jpg" alt="Cat" height="160" width="160"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Today's Dog</h2>
						</div>
						<div class="panel-body">
							<div class="imgur" id="dog"><img src="http://railaware.com/dash/images/dog_image.jpg" alt="Dog" height="160" width="160"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Today's Meme</h2>
						</div>
						<div class="panel-body">
							<div class="imgur" id="meme"><img src="http://railaware.com/dash/images/meme_image.jpg" alt="Meme" height="160" width="160"></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
							<h2 class="panel-title pull-right">Today's Pun</h2>
						</div>
						<div class="panel-body">
							<div class="imgur" id="meme"><img src="http://railaware.com/dash/images/pun_image.jpg" alt="Meme" height="160" width="160"></div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
								<a  class="collapse-btn"><i class="glyphicon glyphicon-chevron-down"></i></a>
								<h2 class="panel-title pull-right">Traffic Status</h2>
							</div>
						<div class="panel-body text-center">
							<div class="col-md-3">
								<div id="95img">
									<img src="images/95.png" alt="95" height="48" width="48">
								</div>
								<div id="travel-time-full" class="travel-status"></div>
							</div>
							<div class="col-md-3">
								<div id="202img">
									<img src="images/202.png" alt="202" height="48" width="48">
								</div>
								<div id="travel-time-beach" class="travel-status"></div>
							</div>
							<div class="col-md-3">
								<div id="295img">
									<img src="images/295.png" alt="295" height="48" width="48">
								</div>
								<div id="travel-time-b" class="travel-status"></div>
							</div>
							<div class="col-md-3">
								<div id="115img">
									<img src="images/115.png" alt="115" height="48" width="48">
								</div>
								<div id="travel-time-southside" class="travel-status"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>
