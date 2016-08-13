$(document).ready(function (){
      $.ajaxSetup({
		  headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
		  
		  
	  });
	  $("form").on("submit",function(e){
		 e.preventDefault();
		 
		 var data=new FormData(this);
					 $.ajax({
					url:'/admin/register',
					type:'POST',
					data:data,
					processData:false,
					contentType:false,
					success:function (data){
						
					}
					
					   });
		  
		  
		  
	  });
	
	
	
});