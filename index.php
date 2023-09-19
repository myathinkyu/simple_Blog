<?php 

include_once "views/top.php";
include_once "views/header.php";
?>

<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
    <section class="col-md-9">
      <div class="row">
        <?php
        $result = "";
          if(checkSession(("username"))){
            $result = getAllPost(2);
          }else{
            $result = getAllPost(1);
          }

          foreach($result as $post){
            $pid = $post["id"];
            echo '<div class="col-md-6">
            <div class="card mb-3">
              <div class="card-block m-3">
                <h5> '.$post["title"].' </h5>
                <p> '.substr($post["content"],0,100).'</p>
                <a href="postDetail.php? pid='.$pid.' " class="btn btn-info btn-sm float-right">Detail</a>
              </div>
             </div>
            </div>';
          }
        ?>
      </div>
    </section>
      
                


<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>




</body>
</html>