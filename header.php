<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Project</title>
    <meta name="description" content="My template">
    
    <!-- style -->
    	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Library Project</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#"><i class="fa fa-book"></i> Library</a></li>
        <li><a href="#"><i class="fa fa-user"></i> Users</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">User <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="text-center" style="padding:10px 0;"><img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10525624_756838227708558_1082657252632105146_n.jpg?oh=b733ca70d524a6254d8c90b030a3f386&oe=54E23628&__gda__=1421140980_ee81bb0f3c6e9b8ee6a4f5ada0c16cc2" alt="..." class="img-circle" style="width:90px;"></li>
              <li class="text-center">Name</li>
            <li class="divider"></li>  
            <li><a href="#">Settings</a></li>
            <li><a href="#">Manage Permissions</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>