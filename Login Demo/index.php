<html>
<!--php login register demo using mysqli database -->
<head><title>Login page demo PHP </title>
<!-- add external css file download css file from bootstrap site-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>




<body>
<p><h2>Login Page Demo </h2></p>
<form action="login.php" method="POST">
<!--now create form for login & register -->
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><label>Username:</label></div>
<div class="col-sm-4"><input type="text" name="username" class="form-control"></div>
</div>

<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"><label>Password: </label></div>
<div class="col-sm-4"><input type="password" class="form-control"name="password"></div>
</div>

<br>
<!-- we required two button login & register -->
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-4"><input type="submit" name="Login" value="Login" class="btn btn-danger"> <input type="button" name="Register" value="Register"  onclick="window.location.href='register.php'" class="btn btn-danger"></div>
</div>

</form>
<br>
</body>

</html>