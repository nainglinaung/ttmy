@layout('template')

@section('title')
 Dayle's Webpage!
 @endsection

 @section('navigation')
 @parent
 <li><a href="#">About</a></li>
 @endsection

 @section('content')
 <h1>Holla!</h1>
 <p>This is url shortener script done with Sweeet {{HTML::link('http://laravel.com', 'Laravel')}} </p>
 @endsection
 
