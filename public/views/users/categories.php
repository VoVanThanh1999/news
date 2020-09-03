<div class="container main-menu" id="main-menu">
	<div class="row align-items-center justify-content-between">
		<nav id="nav-menu-container">
			<ul class="nav-menu">
				<li class="menu-active"><a href="index.html">Home</a></li>
				<li><a href="archive.html">Archive</a></li>
				<li><a href="category.html">Post Types</a></li>
				<li class="menu-has-children"><a href="">Category </a>
					<ul>
						<?php
						$conn = new mysqli(hostname, username, password, dbname);
						$sql = "SELECT * FROM categories WHERE active = 1;";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "<li><a href=/news/home/getByCategories/1/".$row['id']." >".$row['name']."</a></li>"; 	        
						    }
						} else {
						    echo "0 results";
						}						
						?>
						
					</ul></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<!-- #nav-menu-container -->
		<div class="navbar-right">
			<form class="Search">
				<input type="text" class="form-control Search-box" name="Search-box"
					id="Search-box" placeholder="Search"> <label for="Search-box"
					class="Search-box-label"> <span class="lnr lnr-magnifier"></span>
				</label> <span class="Search-close"> <span class="lnr lnr-cross"></span>
				</span>
			</form>
		</div>
	</div>
</div>