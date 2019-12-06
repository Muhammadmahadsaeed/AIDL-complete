<?php
//Include database connection
require_once('../config/db.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
    $sql = "select * from team_members where team_id = $id";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_array($result)) { 

            echo '
            
            <div class="row">

                <div class="twPc-div">
                    <a class="twPc-bg twPc-block"></a>

                    <div>
                        <a title="'.$row['team_name'].'" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
                            <img alt="'.$row['team_name'].'" src="../pages/examples/teamImages/'.$row['team_image'].'" class="twPc-avatarImg">
                        </a>

                        <div class="twPc-divUser">
                            <div class="twPc-divName">
                                <a href="https://twitter.com/mertskaplan">Mert S. Kaplan</a>
                            </div>
                            <span>
                                <a href="https://twitter.com/mertskaplan"><span>'.$row['team_name'].'</span></a>
                            </span>
                        </div>

                        <div class="twPc-divStats">
                            <ul class="twPc-Arrange">
                                <li class="twPc-ArrangeSizeFit">
                                    <a href="#" title="9.840 Tweet">
                                        <span class="twPc-StatLabel twPc-block">'.$row['team_email'].'</span>
                                       
                                    </a>
                                </li>
                                <li class="twPc-ArrangeSizeFit">
                                    <a href="#" title="885 Following">
                                        <span class="twPc-StatLabel twPc-block">'.$row['team_num'].'</span>
                                       
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                        <br>
                        <br>
                    
                    </div>
                </div>
                <br>
                <br> 
               
                    <div class="des">
                        <span style="color:red">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        
                        </span>
                    </div>
            </div>
            
      
            
            ';
           
           
         }
        }
 }
}
?>