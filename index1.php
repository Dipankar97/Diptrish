<?php
  include "co.inc";
  include "server.php";
?>
<html lang="en">
<head>
  <title>Diptrish Open Source Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="final.css">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="final.css">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body onload="myFunction()">
<div id="loading"></div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" style="font-family: 'Lobster', cursive" href="index1.php">Diptrish</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><b><?php echo $_SESSION['username']; ?>
      </b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <?php
          $sql = "Select * from `users` where username='".$_SESSION['username']."'";
        //   $sql = "Select * from `users`";
          $result = mysqli_query($db,$sql);
          $row = mysqli_fetch_assoc($result);
          echo $row['u_id'];
          ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#card">BOOKS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">SEARCH</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://forms.gle/X7WGswkpivu55wut5">DONATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://forms.gle/xSePFSW2j9uMvmFd7">ORDER</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>   
    </ul>
  </div>  
</nav>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 style="color: white">HELLO.</h1>
        <h1 style="color: white">Book</h1>
        <h1 style="font-family: 'Bangers', cursive;">Worms</h1>
      </div>
      <div class="col-sm-6">
        <div class="container" style="font-size: 90%">
          <br>
          <img class="img-fluid" src="pick.png" alt="Snow">
          <div class="centered">
            This is an open source ebook library.
            Choose any book and get lost in it.
            100% Free
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
  <div class="jumbotron">
    <h1 style="color: grey">Choose amongst the genres</h1>
    <p style="color: grey">Below you will find a large number of genres to choose from.
    Make a cup of tea and start exploring.</p>
  </div>
</div>
<a name="card"></a>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="rom.jpg" alt="Card image">
        <div class="card-img-overlay">
         <br><br><br>
        <a href="romance.php" class="btn btn-primary">Romance</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="adventure.jpg" alt="Card image">
        <div class="card-img-overlay">
         <br><br><br>
        <a href="action.php" class="btn btn-primary">Action & Thriller</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="h.jpg" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
        <a href="horror.php" class="btn btn-primary">Horror</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="children.jpg" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
        <a href="children.php" class="btn btn-primary">Children</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="engineering.jpg" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
          <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Engineering
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="cse.php">CSE</a>
              <a class="dropdown-item" href="eee.php">EEE</a>
              <a class="dropdown-item" href="ece.php">ECE</a>
              <a class="dropdown-item" href="me.php">ME</a>
              <a class="dropdown-item" href="ce.php">CE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="medical.jpg" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
        <a href="medical.php" class="btn btn-primary">Medical</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="art.jpg" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
        <a href="arts.php" class="btn btn-primary">Arts</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="comics.png" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
        <a href="comics.php" class="btn btn-primary">Comics</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">>
        <img class="card-img-top" src="audio.jpg" alt="Card image">
        <div class="card-img-overlay">
        <br><br><br>
        <a href="general.php" class="btn btn-primary">General & Fiction</a>
        </div>
      </div>
    </div>
  </div>
</div>
<a name="call"></a>
  <div class="jumbotron">
    <h2>Thanks for helping us</h2>
    <p>You can donate ebooks to us by mailing.</p>
    <!--<p>mmaitrish886@gmail.com</p>-->
    <p>ourproject2022@gmail.com</p>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
  var preloader=document.getElementById('loading');
  function myFunction(){
    preloader.style.display='none';
  }
</script>
</body>
</html>
