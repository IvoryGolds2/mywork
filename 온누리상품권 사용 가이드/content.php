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
  <section>
    <div class="innerWrapper">
    <?php
      $sql2 = query("SELECT DISTINCT * from content WHERE category = '$category'");
      $i = 1;
      foreach($sql2 as $key2 => $val2) { 
        if ($i === 1) { ?>
          <div class="contentbox">
            <?php if($val2['title']) { ?>
              <h2 class="title"><?= $val2['title'] ?></h2>
            <?php } ?>
            <?php if($val2['content']) { ?>
              <pre><?= $val2['content'] ?></pre>
            <?php } ?>
            <?php if($val2['chart']) { ?>
              <img src="./img/<?= $val2['chart'] ?>.png" alt="">
            <?php } ?>
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
        } else if ($i === 4 && ($category === SUB1 || $category === SUB2)) { ?>
          <div class="contentbox">
          <?php if($val2['title']) { ?>
            <h2 class="title"><?= $val2['title'] ?></h2>
          <?php } ?>
          <?php if($val2['content']) { ?>
            <pre><?= $val2['content'] ?></pre>
          <?php } ?>
          <?php if($val2['chart']) { ?>
            <img src="./img/<?= $val2['chart'] ?>.png" alt="">
          <?php } ?>
        </div>
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
        <? } else if ($i === 4 && ($category === SUB3 || $category === SUB5)) { ?>
          <div class="contentbox">
          <?php if($val2['title']) { ?>
            <h2 class="title"><?= $val2['title'] ?></h2>
          <?php } ?>
          <?php if($val2['content']) { ?>
            <pre><?= $val2['content'] ?></pre>
          <?php } ?>
          <?php if($val2['chart']) { ?>
            <img src="./img/<?= $val2['chart'] ?>.png" alt="">
          <?php } ?>
        </div>
        <div class="ads_wrap ads_main_big">
              <ins class="adsbygoogle"
                  data-ad-client="ca-pub-6499164332093487"
                  data-ad-slot="7755700315"
                  data-language="ko"
                  ></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
          </div>        
        <? } else { ?>
          <div class="contentbox">
          <?php if($val2['title']) { ?>
            <h2 class="title"><?= $val2['title'] ?></h2>
          <?php } ?>
          <?php if($val2['content']) { ?>
            <pre><?= $val2['content'] ?></pre>
          <?php } ?>
          <?php if($val2['chart']) { ?>
            <img src="./img/<?= $val2['chart'] ?>.png" alt="">
          <?php } ?>
        </div>
        <?}
        $i++;
      } 
    ?>
    </div>
  </section>
</body>
</html>