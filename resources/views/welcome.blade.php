<!DOCTYPE html>
<html>
    <head>
        <title>Admin Homepage</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<script src="/js/jquery-2.2.4.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
		<meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="container">
        <div class="row">
		          <div class="content">
                <div class="title"> Homepage</div>
				<div>
				<form role="form" class="form-inline">
				   <div class="form-group">
				        <label for="name" class="sr-only">Enter Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Name">
				   
				   </div>
				   <div class="form-group">
				        <label for="email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email">
				   
				   </div>
				   <div class="form-group">
				        <label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter Password">
				   
				   </div>
				   <div class="form-group">
				        <label for="confirm_password" class="sr-only">Confirm Password</label>
						<input type="password" class="form-control" id="" placeholder="Confirm Password">
				   
				   </div>
				   <button type="button" class="btn btn-default">Register</button>
				
				</form>
				
				</div>
            </div>
			 
	    </div>
        </div>
    </body>
</html>
