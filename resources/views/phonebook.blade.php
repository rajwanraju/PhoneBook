<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phonebook</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
		<div class="container">	
		
		<router-view></router-view>
		

		
		
		</div>
		<Myfooter></Myfooter>
	</div>
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>