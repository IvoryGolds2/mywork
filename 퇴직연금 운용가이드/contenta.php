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
    $sql2 = query("SELECT DISTINCT title from content WHERE category = '$category'");
    $i = 1;
    foreach($sql2 as $key2 => $val2) { 
      if ($i === 1) { ?>
        <?php if($val2['title']) { ?>
          <div class="contenttitle">
            <img src="./img/sub-deco.png" alt="">
            <h1 class="title"><?= $val2['title'] ?></h1>
          </div>
          <?php } ?>
          <?php
          $sql3 = query("SELECT DISTINCT * from content WHERE title = '$val2[title]' and category = '$category'");
          foreach ($sql3 as $key3 => $val3) {
            ?>
            <div class="contentbox">
              <?php if($val3['subtitle']) { ?>
                <h2 class="subtitle"><?= $val3['subtitle'] ?></h2>
              <?php } ?>
              <?php if($val3['content']) { ?>
                <pre><?= $val3['content'] ?></pre>
              <?php } ?>
            </div>
            <?php 
          }
          echo '
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
          ';
      ?>
      <? } else { ?>
        <?php if($val2['title']) { ?>
          <div class="contenttitle">
            <img src="./img/sub-deco.png" alt="">
            <h1 class="title"><?= $val2['title'] ?></h1>
          </div>
          <?php } ?>
          <?php
          $sql3 = query("SELECT DISTINCT * from content WHERE title = '$val2[title]' and category = '$category'");
          foreach ($sql3 as $key3 => $val3) {
            ?>
            <div class="contentbox">
              <?php if($val3['subtitle']) { ?>
                <h2 class="subtitle"><?= $val3['subtitle'] ?></h2>
              <?php } ?>
              <?php if($val3['content']) { ?>
                <pre><?= $val3['content'] ?></pre>
              <?php } ?>
            </div>

        <?php 
      }
    }
    $i++;
  }
  ?>
  
  </section>
</body>
</html>