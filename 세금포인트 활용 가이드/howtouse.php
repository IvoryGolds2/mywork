<?php 
include './db.php';
include './front_header.php';
?>
<body>
  <header class="contentHeader">
    <a href="./home.php">
      <img src="./img/sub-arrow.png" alt="">
    </a>
    <h1>조건&이용방법</h1>
  </header>
  <section class="innerWrapper">
    <?php
      $sql = query("SELECT * from howtouse");
      $i = 1;
      foreach($sql as $key => $val) { 
        if ($i === 1) { ?>
          <div>
          <div class="squaretitle">
            <img src="./img/deco.png" alt="">
            <h1><?=$val['subtitle']?></h1>
          </div>
          <pre class="whatisContentBox"><?=$val['content']?></pre>
        </div>
        <?php echo'
        <div class="ads_wrap ads_main_sm">
          <ins class="adsbygoogle"
            data-ad-client="ca-pub-6499164332093487"
            data-ad-slot="7755700315"
            data-language="ko"
            ></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
        ';
        } else { ?>
          <div>
          <div class="squaretitle">
            <img src="./img/deco.png" alt="">
            <h1><?=$val['subtitle']?></h1>
          </div>
          <pre class="whatisContentBox"><?=$val['content']?></pre>
        </div>
        <?} 
        $i++;
        } 
      ?>
  </section>
</body>
<script src="./js/postData.js"></script>
</html>