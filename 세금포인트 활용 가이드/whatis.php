<?php 
include './db.php';
include './front_header.php';
?>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <img src="./img/sub-arrow.png" alt="">
    </a>
    <h1>세금포인트 제도란?</h1>
  </header>
  <section class="innerWrapper">
    <?php
      $sql = query("SELECT * from whatis");
      foreach($sql as $key => $val) { ?>
      <div>
      <pre class="whatisContentBox"><?=$val['content']?></pre>
      </div>
    <?php  } ?>  
  </section>
</body>
<script src="./js/postData.js"></script>
</html>