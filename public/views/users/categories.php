<div class="container main-menu" id="main-menu">
	<div class="row align-items-center justify-content-between">
		<nav id="nav-menu-container">
			<ul class="nav-menu">
				<li class="menu-active"><a href="/news/home/index">Home</a></li>
				<?php
						$conn = new mysqli(hostname, username, password, dbname);
						$sql = "SELECT * FROM categories WHERE active = 1;";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "<li><a href=/news/home/getByCategories/".$row['id']." >".$row['name']."</a></li>"; 	        
						    }
						} else {
						    echo "0 results";
						}						
						?>
				<li><a href="/news/home/laternews">Later News</a></li>
				<li><a href="/news/home/popularnews">POPULAR News</a></li>
				<li><a href="/news/home/about">About</a></li>
				<li><a href="/news/home/contact">Contact</a></li>
			</ul>
		</nav>
		<!-- #nav-menu-container -->
		<div class="navbar-right">
			<form class="Search" action="/news/home/searchByName">
				<input type="text" class="form-control Search-box" name="param"
					id="Search-box" placeholder="Search"> <label for="Search-box"
					class="Search-box-label"> <span class="lnr lnr-magnifier"></span>
				</label> <span class="Search-close"> <span class="lnr lnr-cross"></span>
				</span>
			</form>
		</div>
	</div>
</div>