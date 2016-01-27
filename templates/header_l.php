<!DOCTYPE html>
<html>

<head>
        
        <!-- http://getbootstrap.com/ -->
        <link href="./css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./css/bootstrap-theme.min.css" rel="stylesheet"/>
        <!-- Our CSS -->
        <link href="./css/styles.css" rel="stylesheet"/>
        <?php if (isset($title)): ?>
            <title>Sk8 spot-trick links database: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Sk8 spot-trick links database</title>
        <?php endif ?>

        <!-- http://jquery.com/ -->
        <script src="./js/jquery-1.11.1.min.js"></script>
        <!-- http://getbootstrap.com/ -->   
        <script src="./js/bootstrap.min.js"></script>
        <!-- Our JavaScript -->
        <script src="./js/scripts.js"></script>
</head>

<body>
    <div class="container">

        <div id="top">
           <a href="/"><img alt="logo" src="./img/logo1.gif"/></a>
     <div class="nav">
          <a href="/" class="btn btn-default">About</a>
          <a href="spots.php"><button type="button" class="btn btn-default">Spots</button></a>
          <a href="insert.php"><button type="button" class="btn btn-default">Insert</button></a>
     </div>

        </div><!-- top -->


        <div id="middle">
