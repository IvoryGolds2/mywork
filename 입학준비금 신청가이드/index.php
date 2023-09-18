<?php include './db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "./front_header.php";?>
	<link rel="stylesheet" href="./css/common.css">
</head>
<body>
  <?php include './header.php'; ?>
  <div class="indexBackgroundImage">
    <img src="./img/index.png" alt="">
  </div>
</body>
<?php include './footer.php'; ?>
<script>
setTimeout(() => {
  window.location.href = './home.php';
}, 2000);
</script>
</html>