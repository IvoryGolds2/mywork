<!DOCTYPE html>
<html lang="ko">
<head>
<?php include './front_header.php';?>
<?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
  ?>
<link rel="stylesheet" href="./css/commmon.css">
</head>
<body>
  <div class="backgroundcolorwrapper">
  <header class="contentHeader">
    <img class="logoimg" src="./img/logo.png" alt="">
    <a href="./home.php">
      <button>
        <img class="home" src="./img/home.png" alt="">
      </button>
    </a>
  </header>
    <section class="innerWrapper">
    <?php
      $sql = query("SELECT DISTINCT title from content WHERE category = '$category'");
      foreach($sql as $key => $val) { ?>
        <div>
          <h1><?=$val['title']?></h1>
        </div>
        <?php  
            $sql2 = query("SELECT DISTINCT * from content WHERE title = '$val[title]' and category = '$category'");
            foreach ($sql2 as $key2 => $val2) { ?>
              <div class="whitecontentbox">
                <?php if($val2['content']) { ?>
                  <pre><?= $val2['content'] ?></pre>
                <?php } ?>
              </div>
            <?php 
      }
    } 
  ?>  
  <div class="ads_wrap ads_main_big">
      <ins class="adsbygoogle"
          data-ad-client="ca-pub-2858778486116301"
          data-ad-slot="5839717365"
          data-language="ko"
          ></ins>
      <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
  </div>
    </section>
  </div>
</body>
<script src="./js/postData.js"></script>
</html>