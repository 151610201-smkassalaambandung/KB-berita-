<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Kabar Berita</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link href="{{ url('/css/jquery.dataTables.css')}}" rel="stylesheet">
	    <link href="{{ url('/css/dataTables.bootstrap.css')}}" rel="stylesheet">
	    <link href="{{ url('/css/selectize.css')}}" rel="stylesheet">
	    <link href="{{ url('/css/selectize.bootstrap3.css')}}" rel="stylesheet">
	    

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ url('admin/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ url('admin/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{ url('admin/css/fonts.googleapis.com.css') }}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{ url('admin/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{ url('admin/css/ace-skins.min.css') }}" />
		<link rel="stylesheet" href="{{ url('admin/css/ace-rtl.min.css') }}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{ url('admin/js/ace-extra.min.js') }}"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							{{ Auth::user()->name }}
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="light-blue dropdown-modal">
							@if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <!-- <li><a href="{{ url('/register') }}">Daftar</a></li> -->
                        	@else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                         
                           		</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		@include('backend.sidebar')
		<div class="col-md-8" style="text-align: center;">		
		@include('layouts._flash')
		</div>
		@yield('content')


			

		<!--[if !IE]> -->
		<script src="{{ url('admin/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<!--  -->
		<script src="{{ url('admin/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="{{ url('admin/js/jquery-ui.custom.min.js') }}"></script>
		<script src="{{ url('admin/js/jquery.ui.touch-punch.min.js') }}"></script>
		<script src="{{ url('admin/js/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ url('admin/js/jquery.sparkline.index.min.js') }}"></script>
		<script src="{{ url('admin/js/jquery.flot.min.js') }}"></script>
		<script src="{{ url('admin/js/jquery.flot.pie.min.js') }}"></script>
		<script src="{{ url('admin/js/jquery.flot.resize.min.js') }}"></script>

		<!-- ace scripts -->
		<script src="{{ url('admin/js/ace-elements.min.js') }}"></script>
		<script src="{{ url('admin/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
		<script src="{{ url('/js/jquery.dataTables.min.js')}}"></script>
	      <script src="{{ url('/js/dataTables.bootstrap.min.js')}}"></script>
	      <script src="{{ url('/js/selectize.min.js')}}"></script>
	      <script type="text/javascript" src="{{ url('/ckeditor/ckeditor.js')}}"></script>
	      <script src="{{url('/js/materialize.min.js')}}"></script>
	      <script type="text/javascript">
	      	(function($){
	      		$(function(){
	      			$('.button-collapse').sideNav();
	      		});
	      	})(jQuery);
	      </script>
	      @section('js')

	      @show
	</body>
</html>
