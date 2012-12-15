<!DOCTYPE html>
<html lang=en>
	<head>
		 <meta charset="utf-8">
		 
		 {{ HTML::style('css/reset.css') }}
		 {{ HTML::style('css/bootstrap.css') }}
		 {{ HTML::style('css/style.css') }}
		 	
		 	
			<title>@yield('title')</title>
 
	</head>
	<body>
		
		
	@section('navigation')
 
	 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">TTMY</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active">{{HTML::link_to_action('Shortener','Home')}}</li>
              <li>{{HTML::link_to_route('about','about');}}</li>
              <li>{{HTML::link_to_route('contact','contact');}}</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    
	@yield_section
 	
	<div class="container"> 
		<div id="content"> 
				<div class="hero-unit">
					@yield('content')
				</div> <!-- end of hero-unit -->
		</div> <!-- end of content -->
	
		<div id="footer"> 
			TTMY stands for Tout To Mal Ya which mean "collection of small stuffs" .You can visit {{ HTML::Link('http://m0rris.com','My Blog') }} when you are free. 
			</div> <!-- end of footer -->
		
		</div> <!-- end of container -->
		
		@section('scripts')
			<script type="text/javascript">BASE = "{{URL::base()}}/";</script>
			{{ HTML::script('js/jquery.js') }}
			{{ HTML::script('js/script.js') }}	 
		 @yield_section
		
		
	</body>
</html>
 
 
 