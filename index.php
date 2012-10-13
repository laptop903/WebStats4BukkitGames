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
  <?php include "/includes/navbar.php"; ?>
  <div class="jumbotron subhead">
    <div class="inner">
      <div class="inner-text">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $desc; ?></p>
      </div>
    </div>
  </div>
  <?php include "/includes/footer.php"; ?>
</div>
</body>
</html>