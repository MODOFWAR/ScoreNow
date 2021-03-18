<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scorenow</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<style>
    .navbar{
        top: 3%;
        padding-left: 5%;
        float: right;
    }

    .title{
        margin: 3%;
    }

    .title-image{
            background-image: url('./images/Shanghai-Pudong-Football-Stadium_night-view-1170x555.jpg');
            background-size:cover;
    }

    .slogan{
        padding: 5%;
        color: white;
    }

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Highlights Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Top Score</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="topassist.php">Top Assist</a>
                </li>
            </ul>
                    </div>
                </nav>
    <h2 class= "title">Scorenow<h2>
    <div class="title-image" style="padding-bottom: 200px; margin: 0px;">
	    <div class="container" style="margin-top: 0px;">
            <h1 class='slogan'>Top Scorer</h1>
	    </div>
	</div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Players Name</th>
      <th scope="col"></th>
      <th scope="col">Goals</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aubameyang</td>
      <td></td>
      <td>30</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Salah</td>
      <td></td>
      <td>10</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Bruno Penandes</td>
      <td></td>
      <td>2</td>
    </tr>
  </tbody>
</table>
                
            
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js">
    </script>

</body>
</html>