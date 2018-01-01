<html>
<!--php login register demo using mysqli database -->
<head><title>welcome page   </title>
<!-- add external css file download css file from bootstrap site-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>

<body>
<?php
///now display name of user into welcome page

if(isset($_GET['q']))
{
	$user=$_GET['q'];
}else{
	$user='unkown';
}
?>

<p style="color:red;font-size:30px;margin-left:400px">Welcome! <?php echo $user;?> User </p>

</body>
</html>