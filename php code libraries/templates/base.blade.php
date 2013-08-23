<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>

	{{HTML::style('assets/css/bootstrap.css');}}
	{{HTML::style('assets/css/sticky-footer-navbar.css');}}
	{{HTML::script('assets/js/jquery-1.10.2.min.js');}}
	{{HTML::script('assets/js/bootstrap.min.js');}}


</head>
    <body>
    	<div id="wrap">
    		@include('templates.navbar')
	    		

	        <div class="container">
	        	@section('sidebar')
		        @show
		        
	            @yield('content')
	        </div>
	        <div id="push"></div>
	    </div>
	    @include('templates.footer')
    </body>
</html>
