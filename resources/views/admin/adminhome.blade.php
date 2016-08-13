<!DOCTYPE HTML>
<html>
		<head>
		    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		    <title>Admin Homepage</title>
			<meta name="csrf-token" content="{{csrf_token()}}"/>
			<script src="/js/adminhome.js" />
		</head>
		<body>
		
		     <div class="container">
			     <div class="row" >
				     <div>
					      <p>Log In</p>  
					     <form encytype="multipart/form-data" role="form"> 
						 
						      <div class="form-group">
							      <label for="email">Email</label>
								  <input type="email" name="email" id="email"/>
							  </div>
							  <div class="form-group">
							      <label for="password">Password</label>
							     <input type="password" name="password" id="password"/>
							  </div>
							  <input type="hidden" name="_token" value="{{csrf_token()}}" />
							  <button type="submit" class="btn btn-default" id="login-btn">Log In</button>
						 </form>
					 </div>
					 
					 <!--update div start -->
					 <div id="update">
					 
					 
					 </div>
				 </div>
			 </div>
		</body>
</html>