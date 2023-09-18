<?php 
include './db.php';
include './front_header.php';

$category = $_POST['category'];
// echo $category;
?>
<body>
  <div class="topMenu">
    <a href="./home.php">
      <button>
        <img src="./img/sub-arrow.png" alt="">
      </button>
    </a>
    <span>
      <?php
        $sql = query("SELECT DISTINCT title from contents WHERE category = '$category'");
        foreach($sql as $key => $val) {
          echo $val['title'];
        }
      ?>
    </span>
  </div>
  <div class="innerWrapper">
    <div class="innerBox">
    내용 들어갈 곳 
    </div>
  </div>
</body>
</html>