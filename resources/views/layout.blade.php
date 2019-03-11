<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link 
		rel="stylesheet" 
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" 
		integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" 
		crossorigin="anonymous">

	<script 
		src="https://code.jquery.com/jquery-3.1.1.slim.min.js" 
		integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" 
		crossorigin="anonymous">
	</script>

	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" 
		integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
		crossorigin="anonymous">
	</script>

	<script 
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" 
		integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
		crossorigin="anonymous">
	</script>

	<style>
		.error {width:100%; border-radius: 5px; border:2px solid red; padding:5px 10px; color:#fff; margin:20px 0; background:rgba(255,0,0,0.9); box-shadow: 0px 0px 5px #666}
	</style>
</head>

<body style="padding:40px 0">
	<div class="container">
		@yield('content')
	</div>
</body>
</html>