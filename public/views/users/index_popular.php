
<!-- Start latest-post Area -->
<div class="latest-post-wrap">
	<h4 class="cat-title">Popular</h4>
	<?php 
        $conn = new mysqli(hostname, username, password, dbname);
        $sql = "SELECT * FROM post ORDER BY intro DESC limit  4";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "
                    <div class='single-latest-post row align-items-center'>
                		<div class='col-lg-5 post-left'>
                			<div class='feature-img relative'>
                				<div class='overlay overlay-bg'></div>
                				<img class='img-fluid' src=".$row["images"]." alt=''>
                			</div>
                			<ul class='tags'>
                				<li><a href=''>Popular</a></li>
                			</ul>
                		</div>
                		<div class='col-lg-7 post-right'>
                			<a href='image-post.html'>
                				<h4>".$row["title"]."</h4>
                			</a>
                			<ul class='meta'>
                				<li><a href=''><span class='lnr lnr-user'></span>Mark wiens</a></li>
                				<li><a href=''><span class='lnr lnr-calendar-full'></span>03 April,
                						2018</a></li>
                				<li><a href=''><span class='lnr lnr-bubble'></span>".$row["count_conment"]." comments</a></li>
                			</ul>
                			<p class='excert'>".$row["description"]."</p>
                		</div>
                	</div>
                ";
            }
        } else {
          
        }
    ?>
	
	
</div>