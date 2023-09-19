<?php 

include_once "views/top.php";
include_once "views/header.php";


if(isset($_GET['pid'])){
    $pid = $_GET["pid"];
    
}
?>
 
<div class="container" my-3>
    <div class="card col-md-8 offset-md-2">
   
        <?php
            $result = getSinglePost($pid);
            foreach ($result as $data){
                echo '<div class="card-header">'.$data["title"].'<span class="float-right">'.$data["create_at"].'</span></div>';
                echo '<img src="uploads/'.$data["imglink"].'" alt="">';
                echo '<div class="card-block m-3">'.$data["content"].'</div>';
                echo '<div class="card-footer">'.$data["writer"].'</div>';
                

            }
            
        ?>
    </div>
</div>;
          
        
                


<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>




</body>
</html>