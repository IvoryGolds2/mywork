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
    <?php
      $sql = query("SELECT DISTINCT header from content WHERE category = '$category'");
      foreach($sql as $key => $val) {
    ?>
        <div>
          <h3><?= $val['header'] ?></h3>
        </div>
    <?php
      }
    ?>  
  </header>
  <section class="innerWrapper">
    <?php
      $sql2 = query("SELECT DISTINCT * from content WHERE category = '$category'");
      foreach($sql2 as $key2 => $val2) { ?>
          <?php if($val2['subtitle']) { ?>
            <h2 class="subsub"><?=$val2['subtitle']?></h2>
          <?php } ?>
          <div class="ads_wrap ads_sub_sm">
            <ins class="adsbygoogle"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="1643431225"
              data-language="ko"
              ></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="contentbox">
          <?php if($val2['title']) { ?>
            <h2 class="title"><?=$val2['title']?></h2>
          <?php } ?>
          <?php if($val2['content']) { ?>
            <pre><?=$val2['content']?></pre>
          <?php } ?>
          <?php if($val2['chart']) { ?>
            <img src="./img/<?=$val2['chart']?>.png" alt="">
          <?php } ?>
        </div>
    <?php  } ?>  
  </section>
</body>
</html>