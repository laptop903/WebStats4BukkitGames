<!doctype html>
<?php include "/includes/config.php"; ?>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/custom.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="container-fluid">
    <?php include "/includes/navbar.php"; ?>
    <div class="row-fluid">
      <div class="span3">
      <div class="well affix" style="width: 12%;">
        <ul class="nav nav-list">
        <li class="nav-header">Winners</li>
          <li><a href="#lwinner">Latest</a></li>
          <li><a href="#twinner">Top 10</a></li>
          <li class="nav-header">Deaths</li>
          <li><a href="#ldeath">Latest</a></li>
          <li><a href="#tdeath">Top 10</a></li>
        </ul>
      </div>
      </div>
      <div class="span9">
        <?php include "/includes/stats-gen.php"; ?>
      </div>
    </div>
    <?php include "/includes/footer.php"; ?>
  </div>
</div>
</body>
</html>