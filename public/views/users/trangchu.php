
<html>
<link rel="stylesheet" charset="utf-8" />
<body>
	<?php     echo $_SESSION['id'];?>
	<form action="../comment_user/createComment" method="post"
		enctype="multipart/form-data">
	
		post_id
		<input type="number" name="post_id"><br/>
		content
		<input type="text" name="content"><br/>
		status_s
		<input type="text" name="status"><br/>
		active
		<input type="number" name="active"><br/>
	
	
		<button type="submit" name="sumbit">UPLOAD</button>
	</form>

</body>


</html>