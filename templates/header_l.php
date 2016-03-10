<!DOCTYPE html>
<html>

<head>
        
        <!-- http://getbootstrap.com/ -->
        <link href="./css/bootstrap.css" rel="stylesheet"/>
        <link href="./css/bootstrap.min.css" rel="stylesheet"/>

        <!-- Our CSS -->
        <link href="./css/styles.css" rel="stylesheet"/>
        <?php if (isset($title)): ?>
            <title>Sk8 spot-trick links database: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Sk8 spot-trick links database</title>
        <?php endif ?>

        <!-- http://jquery.com/ -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- http://getbootstrap.com/ -->   
        <script src="./js/bootstrap.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <!-- Our JavaScript:
        <script src="./js/scripts.js"></script> -->
</head>

<body>
    <div class="container">

        <div id="top">
        <!-- NAV BAR -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Sk8Arch1</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./about.php">About <span class="sr-only">(current)</span></a></li>
        <li><a href="./spots.php">Spots</a></li>
        <li><a href="./insert.php">Insert</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="./profile.php">Profile</a></li>
        <li><a href="./logout.php">Log out</a></li>
      </ul>

    </div>
  </div>
</nav>

        </div><!-- top -->


        <div id="middle">
