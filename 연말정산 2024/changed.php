<!DOCTYPE html>
<html lang="ko">
<head>
<?php 
    include './db.php';
    include './front_header.php';
    $category = $_POST['category'];
  ?>
</head>
<body>
  <header class="contentHeader">
    <a href="./changedmenu.php"><img src="./img/prev.png" alt=""></a>
    <a href="./menu.php"><img src="./img/allmenu.png" alt=""></a>
  </header>
  <img class="cuteimg" src="./img/d_main.png" alt="">
  <section class="homeinnerWrapper changedWrapper">
  <div class="ads_wrap ads_sub_sm">
    <ins class="adsbygoogle"
      data-ad-client="ca-pub-2858778486116301"
      data-ad-slot="5839717365"
      data-language="ko"
      ></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <?php
    $sql2 = query("SELECT DISTINCT title from changed WHERE category = '$category'");
    foreach($sql2 as $key2 => $val2) { ?>
    <div class="changedContent">
      <?php if($val2['title']) { ?>
        <h1 class="title"><?= $val2['title'] ?></h1>
      <?php } ?>
      <?php
        $sql3 = query("SELECT DISTINCT * from changed WHERE title = '$val2[title]' and category = '$category'");
        foreach ($sql3 as $key3 => $val3) {
      ?>
        <?php if($val3['tag']) { ?>
          <h4 class="tag"><?= $val3['tag'] ?></h4>
        <?php } ?>
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
  <div class="stupid">
    <a href="https://play.google.com/store/apps/details?id=com.jimw.jiginsusimpleyd&hl=ko-KR"><img src="./img/btn_e.png" alt=""></a>
  </div>  
  </section>
</body>
</html>