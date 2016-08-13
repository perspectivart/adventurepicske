



<script src="/js/adminreg.js"></script>
<form role="form" class="form-inline" enctype="multipart/form-data">
				   <div class="form-group">
				        <label for="name" class="sr-only">Enter Name</label>
						<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
				   
				   </div>
				   <div class="form-group">
				        <label for="email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
				   
				   </div>
				   <div class="form-group">
				        <label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" >
				   
				   </div>
				   <div class="form-group">
				        <label for="confirm_password" class="sr-only">Confirm Password</label>
						<input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" >
				   
				   </div>
				   <button type="submit" class="btn btn-default">Register</button>
				   <input type="hidden" name="usertype" value="{{Admin}}"/>
				   <input type="hidden" name="_token" value="{{csrf_token()}}">
                  
				
		</form>