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
    <a href="./home.php"><button>
      <img src="./img/sub-arrow.png" alt="">
    </button></a>
    <?php
      $sql2 = query("SELECT DISTINCT title from traffic_content WHERE category = '$category'");
      foreach($sql2 as $key2 => $val2) { ?>
        <div>
          <h1><?=$val2['title']?></h1>
        </div>
    <?php } ?>  
  </header>
  <section class="innerWrapper">
    <div class="contentTopMenu">
    <?php
      $sql3 = query("SELECT DISTINCT subtitle from traffic_content WHERE category = '$category'");
      foreach($sql3 as $key3 => $val3) { ?>
      <button id="contentBtn" onclick="toggleContent('<?=$val3['subtitle']?>')">
        <p class="subtitle" id="subtitle-<?=$val3['subtitle']?>">
          <?=$val3['subtitle']?>
        </p>
      </button>
    <?php } ?>  
    </div>
    <div class="contentbox2">
    <?php
      $sql4 = query("SELECT DISTINCT * from traffic_content WHERE category = '$category'");
      $i = 1;
      foreach($sql4 as $key4 => $val4) { 
        $subtitle = $val4['subtitle'];
        $seq = $val4['seq'];
        if ($category === "A" && $subtitle === '마일리지 적립방법' && $i === 3) { ?>
          <div class="contentBox3" data-subtitle="<?=$val4['subtitle']?>" style="display: none;">
          <?php if($val4['contentTitle']) { ?>
            <p><?=$val4['contentTitle']?></p>
          <?php } ?>
          <?php if($val4['content']) { ?>
            <pre><?=$val4['content']?></pre>
          <?php } ?>
          <?php if($val4['chart']) { ?>
            <?php if($val4['chart']) { ?><img src="./img/<?=$val4['chart']?>.png"><?php } ?>
          <?php } ?>
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
        </div>
        <?php 
        } else if ($category === "B" && $subtitle === "마일리지 지급 조건" && $i === 1) { ?>
          <div class="contentBox3" data-subtitle="<?=$val4['subtitle']?>" style="display: none;">
          <?php if($val4['contentTitle']) { ?>
            <p><?=$val4['contentTitle']?></p>
          <?php } ?>
          <?php if($val4['content']) { ?>
            <pre><?=$val4['content']?></pre>
          <?php } ?>
          <?php if($val4['chart']) { ?>
            <?php if($val4['chart']) { ?><img src="./img/<?=$val4['chart']?>.png"><?php } ?>
          <?php } ?>
            <div class="ads_wrap ads_main_big">
              <ins class="adsbygoogle"
                  data-ad-client="ca-pub-2858778486116301"
                  data-ad-slot="1643431225"
                  data-language="ko"
                  ></ins>
              <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
          </div>
        <?php 
        } else { ?>
          <div class="contentBox3" data-subtitle="<?=$val4['subtitle']?>" style="display: none;">
            <?php if($val4['contentTitle']) { ?>
              <p><?=$val4['contentTitle']?></p>
            <?php } ?>
            <?php if($val4['content']) { ?>
              <pre><?=$val4['content']?></pre>
            <?php } ?>
            <?php if($val4['chart']) { ?>
              <?php if($val4['chart']) { ?><img src="./img/<?=$val4['chart']?>.png"><?php } ?>
            <?php } ?>
          </div>
        <?php }
        $i++;
      } 
    ?>
    </div>
  </section>
</body>

</html>