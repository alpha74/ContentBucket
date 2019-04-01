
<!DOCTYPE HTML>
<html>
	<head>
		<title> File Upload </title>
	</head>
	
	<body>
		<form action = "upload.php" method = "POST" enctype = "multipart/form-data">
			<label> Uploading files </label>
			
			<p><input type = "file" name = "file"></p>
			<p><input type = "submit" name = "submit" value = "Upload"></p>
		</form>
	</body>
</html>