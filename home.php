<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <style>
    #img1{
      width: 250px;
      height: 200px;
    }
    
  </style>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <a class="navbar-brand" href="#">Ankur</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li></li>
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/cart">Cart</a></li>
        <li><a href="https://www.programcreek.com/python/example/79006/flask.session.clear">Orders</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul> -->
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        {% if name %}
        <li><a href="/profile">{{name}}</a></li>
        <li> <a href="logout.php">Logout</a></li>
        {% else %}
        <li><a href="admin_login.php">Login</a></li>
        <li> <a href="/signup">Sign Up</a></li>
        {% endif %}
         
      </ul>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li> -->
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <header class="jumbotron">
    <div class="container">
      <h1>Welcome To AnkurSaaS!</h1>
      <p>View our products from all over the world</p>
<!-- <p>
<a class="btn btn-primary btn-large" href="/campgrounds/new">Add New Campground</a>
</p> -->
    </div>
  </header>

  <div class="row text-center" style="display:flex; flex-wrap: wrap;">
<!-- <% campgrounds.forEach(function(campground){ %> -->
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <form action="http://353a145b.ngrok.io/view/id1" method="POST">
        <div class="thumbnail ">

          <img src="https://image.samsung.com/us/smartphones/galaxy-s9/phones/S9plus/Black/0213-GI-S9Plus-Black-Front-v01.jpg" id="img1">
            <div class="caption">
              <h4>phone</h4>
            </div>
           
              

                  <a href="Article.php"> View More </a>
        </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
<form action=" http://353a145b.ngrok.io/view/id2" method="POST">
        <div class="thumbnail ">

          <img src="https://static.toiimg.com/photo/58699124/Asus-R558UQ-DM1286T-Laptop-Core-i5-7th-Gen8-GB1-TBWindows-102-GB.jpg" id="img1">
          <div class="caption">
            <h4>Laptops</h4>
          </div>
         <!--  <p>
          <a href="/campgrounds/<%= campground._id %>" class="btn btn-primary">Add to Cart</a>
          </p> -->
           <button class="btn btn-primary">View More</button>
         </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
<form action=" http://353a145b.ngrok.io/view/id3" method="POST">
        <div class="thumbnail ">

          <img src="https://assets.panashindia.com/media/catalog/product/cache/1/small_image/262x377/9df78eab33525d08d6e5fb8d27136e95/V/T/VTT12_20.jpg" id="img1">
            <div class="caption">
              <h4>Kurti</h4>
            </div>
            <!-- <p>
            <a href="/campgrounds/<%= campground._id %>" class="btn btn-primary">Add to Cart</a>
            </p> -->
            <button class="btn btn-primary">View More</button>
          </form>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <form action=" http://353a145b.ngrok.io/view/id4" method="POST">
        <div class="thumbnail">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWGA8Db7itvoySoMaCAEG-NP4NbuQfVkJtlBVoelpr37KCbgjW" id="img1">
            <div class="caption">
              <h4>Shoes</h4>
            </div>
            <!-- <p>
            <a href="/campgrounds/<%= campground._id %>" class="btn btn-primary">Add to Cart</a>
            </p> -->
            <button class="btn btn-primary">View More</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- <% }); %> -->
</div>


</body>
</html>