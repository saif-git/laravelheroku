
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <form class="form-inline" action="/action_page.php">
    <ul class="navbar-nav">

        <li class="nav-item active">
            <a class="nav-link" href="#">My_website</a>
          </li>

      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
   
    <li class="nav-item">
      <a class="nav-link" href="/prolanguage">Prog_Language</a>
    </li>


  </ul>
  <div class="decalage2">
    <input class="form-control mr-sm-2 " type="text" placeholder="Search">
    <button class="btn btn-success " type="submit">Search</button>
  </div>

    <div class="dropdown decalage">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Options
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">login</a>
          <a class="dropdown-item" href="#">registery</a>
        </div>
      </div>

  </form>

  <style>

    .decalage{
      left: 90%;
    }

    .decalage2{
      left:60%;
    }

    .decalage3{
      left:70%;
    }
  </style>

</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/15.jpg" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="img/16.jpg" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="img/17.jpg" alt="New York">
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>


