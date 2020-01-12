<!DOCTYPE html>
<html>
<head>
	<title>New Article</title>
</head>
<body>
		<center>
			<form action="AddArticle-Backend.php" method="Post">
			Article Title: <input type="text" name="title" style="width: 50% ;height: 25px"><br><br><br>
			Article Summary <textarea cols="150" rows="10" name="Summary"></textarea><br><br><br>
			Article Content <textarea cols="150" rows="20" name="article"></textarea><br><br><br>
			Date:<input type="Date" name="date"><br><br>
			<input type="Submit" name="submit">
				</form>
		</center>
</body>
</html>