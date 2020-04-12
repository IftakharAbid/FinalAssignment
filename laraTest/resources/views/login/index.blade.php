<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post" >
		@csrf
<!-- 		{{csrf_field()}} -->		
<!-- 		<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		Username: <input type="text" name="uname" > <br>
        Password: <input type="password" name="password" ><br>
        Type:   <select name="type" id="Type" style="width: 10%;">
            <option selected hidden disabled >Select Position</option>
             <option value="admin">Admin</option>
             <option value="manager">Bus Manager</option>
           </select><br>
<br>
		<input type="submit" name="submit" value="Submit" >
	</form>

	<h3>{{session('msg')}}</h3>
</body>
</html>