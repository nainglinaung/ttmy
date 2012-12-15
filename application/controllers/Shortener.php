<?php

class Shortener_Controller extends Base_Controller {



	/**
	 * index function
	 *
	 * @return void
	 * @author Naing Lin Aung (http://m0rris.com)
	 **/
	 
	public function action_index()
	{
 		// rendering original view
 			
		return View::make('main.index');
		 	
 	}
 	
 	
 	/**
 	 * respsone and redirect to dedicated urls from shorted ones 
 	 *
 	 * @return Object
 	 * @param  String
 	 * @author Naing Lin Aung (http://m0rris.com)
 	 **/
 	
 	public function action_view($name)
 	{
 				
 			
 		
 		if (Shortenurl::requesturltoid($name)){
 			
 			// Redirect to dedicated url 
 			
 			return Redirect::to(Shortenurl::requesturltoid($name)->givenurl);
 		
 		}
 		else{
 		   
 			 // Error 404 message 
 			 
 			 return Response::error('404');
		}	
 					
	}
	
	
 	
	/**
	 * creating shortened url from users 
	 *
	 * @return object
	 * @author Naing Lin Aung (http://www.m0rris.com)
	 **/
	
	 public function action_create(){
	 	
	 	
	 	
	 	
	 	// generating random fragment of shortened url
	 	
	 	
	 	$character=null;
			
	 	
	 	for ($i=0; $i<=5; $i++){
				
				$no = rand(65,90);
				$character .=  chr($no);
				
		}
		
 		
		// grabbing input data from input class 
		
 		$input = Input::all();
 		$input['shortenedurl'] = $character;
 		
 		
 		
 		// Declaring rules 
 		
 		$rules = array(
    	'givenurl'  => 'required|url',
    	'shortenedurl' => 'unique:shortenurl'
		);
		
		
		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
    		
		 	// return error
		 	
			$data['error']= $validation->errors;
			
			return Response::json($data);
			
		 	
		}
		else
		{
			
			// Inserting new shortened url 
			
			$Shortenurl = new Shortenurl();;
			$Shortenurl->givenurl = $input['givenurl'];
			$Shortenurl->shortenedurl= $input['shortenedurl']; 
			$Shortenurl->save();			
					
 			
			$data['Shortenurl'] = $Shortenurl->attributes;
			
			return Response::json($data);
			
			//return View::make('main.index',$data);
		 	
			// VIEW THE SAME PAGE with success 		
			
 			
		}
 		
 			
 		
 	}
 
 

}