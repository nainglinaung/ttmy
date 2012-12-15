<?php  

	
	class Shortenurl extends Eloquent{
		
		public static $table = 'shortenurl';	
		public static $timestamps = false;
		
		
		/**
		 * return $id from requested url		 
		 * @param string
		 * @return string 
		 * @author Naing Lin Aung
		 **/
		
		public static function requesturltoid($url){
			
			$Shortenurl = new Shortenurl();
			
			
			
			$id = DB::table('shortenurl')->select(array('id'))->where('shortenedurl', '=', $url)->get();	
			
			
			
			if($id){
				
				return $Shortenurl->find($id[0]->id);
						
			}
			else {
				
				return null;
			
			}
			
		}
	}
	
	
	
?>