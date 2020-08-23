<div class="single-sidebar-widget editors-pick-widget">
	<h6 class="title">Editor’s Pick</h6>
	<div class="editors-pick-post">
		<div class="post-lists">
			<?php
                    $conn = new mysqli(hostname, username, password, dbname);
                    $sql = "SELECT * FROM post ORDER BY content DESC limit  4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "
                                <div class='single-post d-flex flex-row'>
                                	<div class='thumb'>
                                		<img src='/news/public/views/img/e2.jpg' alt=''>
                                	</div>
                                	<div class='detail'>
                                		<a href='image-post.html'><h6>".$row['title']."</h6></a>
                                		<ul class='meta'>
                                			<li><a href=''><span class='lnr lnr-calendar-full'></span>03
                                								April, 2018</a></li>
                                			<li><a href=''><span class='lnr lnr-bubble'></span>".$row['count_conment']."</a></li>
                                		</ul>
                                	</div>
                                </div>
                               ";
                        }
                    } else {}
                    ?>
			
			
		</div>
	</div>
</div>