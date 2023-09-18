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
    <div class="titleimg">
      <img class="indexTextTop" src="./img/index-logo.png" alt="">
      <img class="indexTextBottom" src="./img/index.png" alt="">
    </div>
    <img class="indexBg" src="./img/background.png" alt="">
  </div>
</body>
<?php include './footer.php'; ?>
<script>
setTimeout(() => {
  window.location.href = './home.php';
}, 2000);
</script>
</html>