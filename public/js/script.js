 // public/js/script.js
 jQuery(document).ready(function($) {
 // perform javascript only when the document
 // has been fully loaded
 

   
 	$('#load').click(function(e) {
 	
 			e.preventDefault();
 			 var formData = $("form").serialize();
 			 	
 			 $.ajax({
			 
 			 	type: "POST",
				url:BASE+'index.php/shortener/create',
 			 	data: formData,
 			 	success:function(data){
 			 	
 			 		
 			 		
 			 		
 			 		if(data.error){
 			 			
	 			 		$('.control-group').addClass('error');
	 			 		$('.help-inline').html(data.error.messages.givenurl[0]);
	 			 	}
	 			 	else{
		 			 		
		 			 	console.log(data);	
		 				$('#givenurl').html('<a href='+data.Shortenurl.givenurl+'>'+data.Shortenurl.givenurl+'</a>');
		 			 	$('#shortenedurl').html('<a href='+data.Shortenurl.shortenedurl+'>'+BASE+data.Shortenurl.shortenedurl+'</a>'
		 			 		
		 			 	);
		 			 	
		 			 			
	 			 	}
 			 		
 			 		
 			 		
 			 	}
 			 	
 			 	
 			 	
 			 	
 			 	// $('#content').html(data);
 				//console.log(data);
 			});
 			
 		
 	});
 	
 });