<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">	
	<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');
.home {
	font-family: 'Oswald';
	font-size: 40px;
}
.about {
	font-family: 'Oswald';
	font-size: 40px;
}
.navs {
	font-family: Quicksand;
	font-size: 17px;
	color: black;
}
.navss {
	font-family: Niconne;
	font-size: 40px;
	color: black;
	margin-right: 10px;
	margin-top: 5px;
}
.jmb {
	background-color: #ffe2e2;
}
.navbar {
	background-color: #ffc7c7;
}
body {
	background-color: #f6f6f6;
}
.list {
	margin-left: 20px;
}
.h {
	margin-left: 15px;
}
.tmbh {
	margin-left: 10px;
}
</style>
	<title>@yield('title')</title>
</head>
<body>
	@include('master._navigasi')
	@yield('content')
</body>
</html>