
<section class="top-post-area pt-10">
	<div class="container no-padding">
		<div class="row small-gutters">
		<?php
            $conn = new mysqli(hostname, username, password, dbname);
            $sql = "SELECT * FROM post where active = 1 ORDER BY id DESC limit  3";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                $count = 0;
                while ($row = $result->fetch_assoc()) {
                    if ($count == 0) {
                        echo "
                          <div class='col-lg-8 top-post-left'>
            				<div class='feature-image-thumb relative'>
            					<div class='overlay overlay-bg'></div>

            					<img class='img-fluid' src='/news/public/views/img/".$row['images']."' alt='' >

            				</div>
            				<div class='top-post-details'>
            				
            					<a href='/news/chitiet/baiviet/".$row['slug']."'>
            						<h3>".$row['title']."</h3>
            					</a>
            					<ul class='meta'>				
            						<li><a href=''><span class='lnr lnr-calendar-full'></span>03
            								April, 2018</a></li>
            						<li><a href=''><span class='lnr lnr-bubble'></span>".$row['count_conment']."</a></li>
            					</ul>
            				</div>
            			</div>";
                        $count ++;
                    } elseif ($count == 1) {
                        echo "
                         <div class='col-lg-4 top-post-right'>
            				<div class='single-top-post'>
            					<div class='feature-image-thumb relative'>
            						<div class='overlay overlay-bg'></div>
            						<img class='img-fluid' src='/news/public/views/img/".$row['images']."' alt='' >
            					</div>
            					<div class='top-post-details'>
            						
            						<a href='/news/chitiet/baiviet/".$row['slug']."'>
            							<h4>".$row['title']."</h4>
            						</a>
            						<ul class='meta'>

            							<li><a href=''><span class='lnr lnr-calendar-full'></span>03
            									April, 2018</a></li>
            							<li><a href='#'><span class='lnr lnr-bubble'></span>".$row['count_conment']."</a></li>
            						</ul>
            					</div>
            				</div>
            			</div>";
                        $count ++;
                    } 
                }
            } else {
                echo "0 results";
            }
            ?>			
			<div class="col-lg-12">
				<div class="news-tracker-wrap">
					<h6>
						<span>Breaking News:</span> <a href="#">Xem tin mới nhất tại đây</a>
					</h6>
				</div>
			</div>
		</div>
	</div>
</section>