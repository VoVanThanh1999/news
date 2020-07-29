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
						foreach ($datas as $data){
						    foreach ($data as $value) {
						        echo "<li><a href=".$value->name.">".$value->name."</a></li>";   
						    }
						   
						}?>
						
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