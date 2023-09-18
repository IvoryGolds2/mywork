<?php include './db.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<?php include "./front_header.php";?>
	<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <?php include './header.php'; ?>
  <div class="indexBackgroundImage">
    <img class="indexImg" src="./img/index.png" alt="">
    <img class="indexlogo" src="./img/index_logo.png" alt="">
  </div>
</body>
<?php include './footer.php'; ?>
<script>
setTimeout(() => {
  window.location.href = './home.php';
}, 2000);
</script>
</html>