<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
  ?>
  <link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
        <div>
          <h3>퇴직금과 퇴직연금 차이 한눈에 비교하기</h3>
        </div>
  </header>
  <section class="innerWrapper">
    <img class="homechartimg" src="./img/chart-2.png" alt="">
  </section>
</body>
</html>