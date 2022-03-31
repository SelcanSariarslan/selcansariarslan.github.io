<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>activity 4</title>
	<style type="text/css">
		.satir{
			width: 570px;
			height: 450px;
			line-height: 35px;
		}
		input{
			margin-right: 9px;
			display: inline-block;
			width: 21%;
			min-width: 30px;
		}
	</style>
</head>
<body>
	<div class="satir">
	<form action="Activity4-preview.php" method="POST">
		
	Name : <input type="text" name="name"/><br/>
	Username : <input type="text" name="username"/><br/>
	Password : <input type="password" name="password"/><br/>
	Address : <input type="text" name="address"/><br/>
	Country : <select name="country">
			<option value="Turkey">America</option>
			<option value="Turkey">Turkey</option>
			<option value="Russia">Russia</option>
		</select><br/>
	ZIP Code : <input type="text" name="code"/><br/>
	Email : <input type="text" name="email"/><br/>
	Sex : Male<input type="radio" name="sex" value="yes"/>
		Female<input type="radio" name="sex" value="no"/><br/>
	Language :
	    English<input type="checkbox" name="check[]" value="English" />
		French<input type="checkbox" name="check[]" value="French" />
		Germany<input type="checkbox" name="check[]" value="Germany" /><br/>
	About : <textarea name="comments"></textarea><br/>
	<input type="submit" value="submit" name="submit" /> 
	</form>	</div>
</body>
</html>