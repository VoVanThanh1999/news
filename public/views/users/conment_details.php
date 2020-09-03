
<div class="comment-list">
	<?php 
        $conn = new mysqli(hostname, username, password, dbname);
        $sql = "SELECT * FROM comments where post_id='".$data->id."' and active = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               echo " 
                <div class='single-comment justify-content-between d-flex'>
                    <div class='user justify-content-between d-flex'>
                        <div class='thumb'>
                         <img style='width:63px' class='img-fluid' src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSACxjGXP1NZVNCW08rEadF-ZSn8oj1yvA0Ig&usqp=CAU' alt=''>
                        </div>
                        <div class='desc'>
                            <h5>
                             <a href=''>".$row['name_user']."</a>
                            </h5>
                            <p>
                             <a href=''>".$row['date']."</a>
                            </p>
                            <p class=comment'>".$row['content']."</p>
                        </div>
                    </div>  
                </div>";
            }
        } else {
            
        }
    ?>
</div>