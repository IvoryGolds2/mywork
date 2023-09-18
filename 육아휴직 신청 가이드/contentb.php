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
          <h1><?= $val['header'] ?></h1>
        </div>
    <?php
      }
    ?>  
  </header>
  <section class="innerWrapper">
  <?php
    $sql2 = query("SELECT DISTINCT title from content WHERE category = '$category'");
    $i = 1;
    foreach($sql2 as $key2 => $val2) { ?>
        <div class="contentB">
          <?php if($val2['title']) { ?>
            <p class="title"><?= $val2['title'] ?></p>
          <?php } ?>
          <?php
            $sql3 = query("SELECT DISTINCT * from content WHERE title = '$val2[title]' and category = '$category'");
            foreach ($sql3 as $key3 => $val3) {
          ?>
              <?php if($val3['subtitle']) { ?>
                <p class="subtitle"><?= $val3['subtitle'] ?></p>
              <?php } ?>
              <?php if($val3['content']) { ?>
                <pre><?= $val3['content'] ?></pre>
              <?php } ?>
              <?php if($val3['chart']) { ?>
                <img src="./img/<?= $val3['chart'] ?>.png" alt="">
              <?php } ?>
          <?php
            }
          ?>  
        </div>
        <?
      }
      ?>
      <div class="ads_wrap ads_main_big">
        <ins class="adsbygoogle"
          data-ad-client="ca-pub-5441250633929933"
          data-ad-slot="2028954353"
          data-language="ko"
          ></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
  </section>
</body>
</html>