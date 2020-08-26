


<div class="popular-post-wrap">
	<h4 class="title">Popular Posts</h4>
	<?php
$conn = new mysqli(hostname, username, password, dbname);
$sql = "SELECT * FROM post ORDER BY intro DESC limit  2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        if ($count == 0) {
            echo "  
                <div class='feature-post relative'>
            		<div class='feature-img relative'>
            			<div class='overlay overlay-bg'></div>
            			<img class='img-fluid' src='/news/public/views/img/".$row['images']."' alt='' >
            		</div>
            		<div class='details'>
            			<ul class='tags'>
            				<li><a href='/news/chitiet/baiviet/".$row['slug']."/".$row['id']."'>Popular</a></li>
            			</ul>
            			<a href='image-post.html'>
            				<h3>".$row['title'].".</h3>
            			</a>
            			<ul class='meta'>
            				<li><a href=''><span class='lnr lnr-user'></span>Mark wiens</a></li>
            				<li><a href=''><span class='lnr lnr-calendar-full'></span>03 April,
            						2018</a></li>
            				<li><a href=''><span class='lnr lnr-bubble'>".$row['count_conment']."</span></a></li>
            			</ul>
            		</div>
            	</div>
                     ";
            $count ++;
        } elseif ($count == 1) {
            echo " 
                  <div class='col-lg-6 single-popular-post mt-4'>
        			<div class='feature-img-wrap relative'>
        				<div class='feature-img relative'>
        					<div class='overlay overlay-bg'></div>
        					<img class='img-fluid' src='/news/public/views/img/".$row['images']."' alt='' >
        				</div>
        				<ul class='tags'>
        					<li><a href=''>Travel</a></li>
        				</ul>
        			</div>
        			<div class='details'>
        				<a href='/news/chitiet/baiviet/".$row['slug']."/".$row['id']."'>
        						<h4>".$row['title'].".</h4>
        				</a>
        				<ul class='meta'>
        					<li><a href=''><span class='lnr lnr-user'></span>Mark wiens</a></li>
        					<li><a href=''><span class='lnr lnr-calendar-full'></span>03
        							April, 2018</a></li>
        						<li><a href=''><span class='lnr lnr-bubble'>".$row['count_conment']."</span></a></li>
        				</ul>
        				<p class='excert'>Lorem ipsum dolor sit amet, consecteturadip
        					isicing elit, sed do eiusmod tempor incididunt ed do eius.</p>
        			</div>
        		</div>
                         ";
            $count ++;
        }
    }
} else {}
?>
	<div class="row mt-20 medium-gutters"></div>
</div>