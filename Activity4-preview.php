<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activity4-preview</title>
</head>
<body>
	<?php
if(isset($_POST['submit']))
{
  $name = $_POST['name']; echo "$name <br>"; 
  $username = $_POST['username']; echo "$username <br>";
  $password = $_POST['password']; echo "$password <br>";
		if (empty($_POST["address"])) {
    $address =  "Address : Not provided <br>";
  } else {
   $address = $_POST['address']; echo "$address <br>"; 
  }
  $country = $_POST['country']; echo "$country <br>";
  $code = $_POST['code']; echo "ZİP : $code <br>";
  $email = $_POST['email']; echo "$email <br>";
  $sex = $_POST['sex']; echo "$sex <br>";
  /*if (empty($_POST['checkbox'])==false) {
			echo "$_POST['checkbox'] <br>";
		}
		else
		{
			echo "About : Not provided <br>";
		}
  $comments = $_POST['comments']; echo "$comments <br>";*/
}
?>

</body>
</html>