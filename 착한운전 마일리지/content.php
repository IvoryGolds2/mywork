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
                <img src="./img/back.png" alt="">
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
    <section Class="innerWrapper">
      <?php
      $i = 1;
      $sql2 = query("SELECT DISTINCT * from content WHERE category = '$category'");
      foreach($sql2 as $key2 => $val2) { 
        if (($category === 'SUB3' || $category === 'SUB4') && $i === 1) {?>
          <div class="content">
            <?php if($val2['title']) { ?>
              <h2 class="title"><img src="./img/deco.png" alt=""><?=$val2['title']?></h2>
              <?php } ?>
              <?php if($val2['subtitle']) { ?>
                <p class="subtitle"><?=$val2['subtitle']?></p>
              <?php } ?>
              <?php if($val2['content']) { ?>
                <div class="contentbox">
                <pre><?=$val2['content']?></pre>
                </div>
            <?php } ?>
          </div>
          <div class="ads_wrap ads_main_big">
            <ins class="adsbygoogle"
              data-ad-client="ca-pub-2858778486116301"
              data-ad-slot="2985402594"
              data-language="ko"
              ></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        <?} else { ?>
          <div class="content">
            <?php if($val2['title']) { ?>
              <h2 class="title"><img src="./img/deco.png" alt=""><?=$val2['title']?></h2>
              <?php } ?>
              <?php if($val2['subtitle']) { ?>
                <p class="subtitle"><?=$val2['subtitle']?></p>
              <?php } ?>
              <?php if($val2['content']) { ?>
                <div class="contentbox">
                <pre><?=$val2['content']?></pre>
                </div>
            <?php } ?>
          </div>
        <? }
        $i++;
      }?>  
      <div class="ads_wrap ads_main_big">
        <ins class="adsbygoogle"
          data-ad-client="ca-pub-2858778486116301"
          data-ad-slot="2985402594"
          data-language="ko"
          ></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </section>
</body>
</html>