<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cims Farm">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>CimsFarm</title>
		<!-- Favicon -->
		<!-- <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/> -->
		<!-- Font Awesome -->
		<link href="{{ asset('site/css/font-awesome.css')}}" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="{{ asset('site/css/bootstrap.css')}}" rel="stylesheet">
		<!-- Slick slider -->
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/slick.css')}}"/> 
		<!-- Fancybox slider -->
		<link rel="stylesheet" href="{{ asset('site/css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
		<!-- Animate css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('site/css/animate.css')}}"/> 
		<link href="{{ asset('site/css/template-color/lite-blue-template.css')}}" rel="stylesheet">

		<!-- Main Style -->
		<link href="{{ asset('site/css/style.css') }}" rel="stylesheet">

		<!-- Fonts -->
		<!-- Open Sans for body font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!-- Raleway for Title -->
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!-- Pacifico for 404 page   -->
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>		
		<!-- SCROLL TOP BUTTON -->
		<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
		<!-- END SCROLL TOP BUTTON -->

		<!-- Start menu section -->
		<div id="menu-area">
			<nav class="navbar navbar-default main-navbar">
				<div class="container">
					<div class="navbar-header">
						<!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- LOGO -->                  
						<a class="navbar-brand logo" href="http://cimsfarm.com.br/">CIMS</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
							<li class="active"><a href="#header">Home</a></li>
							<li><a href="#about">QUEM SOMOS</a></li> 
							<!-- <li><a href="#team">EQUIPE</a></li>  -->
							<li><a href="#service">SERVIÇO</a></li>
							<li><a href="#pricing-table">PREÇO</a></li>
							<li><a href="#contact">CONTATO</a></li>
							<?php if( isset( $_SESSION['user'] ) ){ ?>
							<li><a href="cadastro/logout">LOGOUT</a></li>
							<li><a href="admin">ADMIN PANEL</a></li>
							<?php }?>
						</ul>
					</div><!--/.nav-collapse -->       
				</div>          
			</nav> 
		</div>
        <!-- End menu section -->
        
        @yield('content');

<!-- Start Footer -->    
<footer id="footer">
    <div class="footer-bottom">
        <div>
            <p>© <?=date('Y')?> - Todos direitos Reservados.  <a href="#">CimsFarm</a></p>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- initialize jQuery Library --> 
<script src="{{ asset('site/js/jquery-1.12.4.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="{{ asset('site/js/bootstrap.js') }}"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="{{ asset('site/js/slick.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('site/js/waypoints.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/js/jquery.counterup.js') }}"></script>
<!-- mixit slider -->
<script type="text/javascript" src="{{ asset('site/js/jquery.mixitup.js') }}"></script>
<!-- Add fancyBox -->        
<script type="text/javascript" src="{{ asset('site/js/jquery.fancybox.pack.js') }}"></script>
<!-- Wow animation -->
<script type="text/javascript" src="{{ asset('site/js/wow.js') }}"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="{{ asset('site/js/jquery.mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('site/js/custom.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-40404502-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-40404502-6');
</script>
<!--Start of Zendesk Chat Script-->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5MmXjKXhnacZwuELH7vCsYsSOGX5Hqpo";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>
</html>