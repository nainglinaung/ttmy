@layout('template')

 				@section('content')
				 <h1>TTMY URL Shortener </h1> 
			 
				{{Form::open('shortener/create','POST',array('class' => 'form-horizontal') )}}
				
				<div class="control-group">
				
					{{Form::text('givenurl')}}
					{{Form::submit('Shorten Url!',array('id'=>'load'))}}
					
					<span class="help-inline"></span>
					
				
				</div>   {{-- end of control-group --}}
				{{Form::close()}}
				
							
				<div id="givenurl"><a href="#"></a></div>
				<div id="shortenedurl"><a href="#"></a></div>
				 @endsection
				
			
 @yield('scripts')