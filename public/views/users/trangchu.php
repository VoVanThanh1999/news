<html>
<link rel="stylesheet" charset="utf-8" />
<body>
	<form action="../post_controller/createPost" method="post"
		enctype="multipart/form-data">
		category_id
		<input type="number" name="category_id"><br/>
		title
		<input type="text" name="title"><br/>
		intro
		<input type="text" name="intro"><br/>
		content
		<input type="text" name="content"><br/>
		tag
		<input type="text" name="tag"><br/>
		description
		<input type="text" name="description"><br/>
		slug
		<input type="text" name="slug"><br/>
		<input type="file" name="file" multiple="multiple">
		<button type="submit" name="sumbit">UPLOAD</button>
	</form>

</body>


</html>