<?php include './db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "./front_header.php";?>
	<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <?php include './header.php'; ?>
  <div class="indexBackgroundImage">
    <img class="indexText" src="./img/index-logo.png" alt="">
    <img class="indexBg" src="./img/index-background.png" alt="">
  </div>
</body>
<?php include './footer.php'; ?>
<script>
setTimeout(() => {
  window.location.href = './home.php';
}, 2000);
</script>
</html>