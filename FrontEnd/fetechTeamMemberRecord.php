<?php
//Include database connection
require_once('../config/db.php');

if($_GET['rowid']) {
    $id = $_GET['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
    $sql = "select * from team_members where team_id = $id";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) { 

            echo '
            
            
           
            <div class="bio-info" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bio-image">
                                    <img alt="'.$row['team_name'].'" src="../pages/examples/teamImages/'.$row['team_image'].'"  height="300px" width="300px" />
                                </div>			
                            </div>
                        </div>	
                    </div>
                    <div class="col-md-6" style="background-color:#9e060f">
                        <div class="bio-content"  style="padding-left: 5%;">
                        <br>
                            <h1 style="color:white">'.strtoupper($row['team_name']).'</h1>
                            <small style="color:white;padding-left:40%">'.strtoupper($row['team_post']).'</small><br>
                            <br>
                            <h6 style="color:white">I am a fresh web designer and I create custom web designs. Im skilled at writing well-designed, testable and efficient code using current best practices in Web development..</h6>
                            
                        </div>
                    </div>
                </div>	
            </div>
       
            
            ';
           
           
         }
        }
 }
}
?>






