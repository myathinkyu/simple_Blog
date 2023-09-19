<!--Navigation Start--> 
<div class="container-fluid bg-primary">
<nav class="container navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand text-white" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white english" href="index.php">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white english" href="filterPost.php?sid=1">Politic</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white english" href="filterPost.php?sid=2">Wars</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white english" href="filterPost.php?sid=3">IT News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white english" href="filterPost.php?sid=4">Social</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white english" href="#" id="myDD" role="button" data-toggle="dropdown">
        <?php
        if (checkSession("username")){
          echo getSession("username");
        }else {
          echo "Member";
        }
      ?>
        </a>
        <div class="dropdown-menu">
        <?php
        if (checkSession("username")){
          echo "<a class='dropdown-item' href='logout.php'>Logout</a>";
        } else {
          echo "<a class='dropdown-item' href='register.php'>Register</a>";
          echo "<a class='dropdown-item' href='login.php'>Login</a>";
        }
      ?>
          

        </div>
      </li>
    </ul>
  </div>


  </div>
</nav>
</div>
<!--Navigation End--> 