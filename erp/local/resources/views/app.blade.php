<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/morris.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jquery-ui-1-11-4.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
    <link href="{{ asset('/css/katamereka-erp.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style>
    p.pos_fixed {
        position: fixed;
        top: 80px;
        left: 600px;
    }
    </style>
</head>
<body>
    <!-- <div id="midposition"> -->
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://app.innovatorsmove.com/api/public/app/admin/attendance">ERP</a>
            </div>
            <ul class="nav navbar-right top-nav">              
                <li class="dropdown">
	                @if(Auth::check())
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->nama}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('auth/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                    @endif
                </li>
            </ul>


             
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

        </nav>
        <div id="page-wrapper">

            <div class="container-fluid">
                @if (Session::has('alert'))
                    
                    <div class="alert alert-warning">
                        {{Session::get('alert')}}
                    </div>    

                @endif

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	<!-- Scripts -->
	<!-- jQuery Version 1.11.0 -->
    <script src="{{ asset('/js/jquery-1.11.0.js') }}"></script>
    <script src="{{ asset('/js/jqueryui-1.11.4.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/morris/morris.min.js') }}"></script>
    <script type="text/javascript">
        @yield('script')
    </script>
</body>
</html>
